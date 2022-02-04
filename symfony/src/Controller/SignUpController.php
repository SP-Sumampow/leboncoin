<?php

namespace App\Controller;

use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SignUpController extends AbstractController
{
    /**
     * + @Route("/signUp", "signUp")
     */
    public function signUp(TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('signUp/signUp.html.twig', [
            'tags' => $tags,
        ]);
    }
}