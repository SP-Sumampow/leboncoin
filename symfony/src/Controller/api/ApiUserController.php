<?php

namespace App\Controller\api;

use App\Entity\User;
use App\Entity\UserACLType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Validation;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\CurrentUser;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Persistence\ManagerRegistry;

class ApiUserController extends AbstractController
{
    /**
     * @Route("/api/signUp",
     *     name="api_signUp",
     *     methods={"POST"})
     */

    public function apiUserSignUp(Request $request, UserPasswordHasherInterface $passwordHasher, SerializerInterface $serializer, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $email = $request->request->get("email");
        $password = $request->request->get("password");

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

        $response = new Response(
            $serializer->serialize($user, 'json'),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );

        return $response;
    }

    /**
     * @Route("/api/login", name="app_login", methods={"POST"})
     */
    public function apiUserSignIn(SerializerInterface $serializer): Response
    {
        $response = new Response(
            $serializer->serialize($this->getUser(), 'json'),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );

        return $response;
    }

    /**
     * @Route("/logout", name="logout", methods={"GET"})
     */
    public function logout(): void
    {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }
}