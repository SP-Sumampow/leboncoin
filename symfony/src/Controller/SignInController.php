<?php

namespace App\Controller;


use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class SignInController extends AbstractController
{

    #[Route('/signIn', name: 'signIn')]
    public function signIn(AuthenticationUtils $authenticationUtils, TagRepository $tagRepository): Response
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $tags = $tagRepository->findAll();
        return $this->render('signIn/signIn.html.twig', [
            'tags' => $tags,
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
}

