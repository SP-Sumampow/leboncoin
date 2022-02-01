<?php

namespace App\Controller;

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignInController extends AbstractController
{
    /**
     * + @Route("/signIn", "signIn")
     */
    public function number(): Response
    {
        return $this->render('signIn/signIn.html.twig');
    }
}