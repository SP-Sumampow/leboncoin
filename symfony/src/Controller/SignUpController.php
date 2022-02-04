<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\UserACLType;
use App\Repository\TagRepository;
use App\Repository\UserRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validation;

class SignUpController extends AbstractController
{
    /**
     * @Route("/signUp", name="signUp", methods={"GET","POST"})
     */
    public function signUp(TagRepository $tagRepository, Request $request, UserPasswordHasherInterface $passwordHasher, SerializerInterface $serializer, ManagerRegistry $doctrine): Response
    {
        $tags = $tagRepository->findAll();

        $entityManager = $doctrine->getManager();

        $email = $request->request->get("email");
        $password = $request->request->get("password");

        if (isset($email) && isset($password)) {
            $validator = Validation::createValidator();

            $input = [
                'email' => $email,
                'password' => $password,
            ];

            $groups = new Assert\GroupSequence(['Default', 'custom']);

            $constraint = new Assert\Collection([
                'email' => [new Assert\Email(), new Assert\NotBlank()],
                'password' => [new Assert\NotBlank(), new Assert\Length(['min' => 5]), new Assert\NotCompromisedPassword()]
            ]);

            $violations = $validator->validate($input, $constraint, $groups);

            if (count($violations) > 0) {
                $errorsString = (string)$violations;
                return $this->json($errorsString, 400);

                return $this->render('signUp/signUp.html.twig', [
                    'tags' => $tags,
                    'error' => $error
                ]);
            }

            $user = new User();
            $user->setEmail($email);
            $hashedPassword = $passwordHasher->hashPassword(
                $user,
                $password
            );
            $user->setPassword($hashedPassword);
            $user->setRoles([UserACLType::USER->value]);

            $entityManager->persist($user);
            $entityManager->flush();

            $this->redirect("home");
        } else {
            return $this->render('signUp/signUp.html.twig', [
                'tags' => $tags,
            ]);
        }
    }
}