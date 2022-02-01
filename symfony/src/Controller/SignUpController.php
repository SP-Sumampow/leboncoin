<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    /**
     * + @Route("/signUp", "signUp")
     */
    public function number(): Response
    {
        return $this->render('signUp/signUp.html.twig');
    }
}