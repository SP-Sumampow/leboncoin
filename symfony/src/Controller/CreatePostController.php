<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CreatePostController extends AbstractController
{
    /**
     * + @Route("/createPost", "createPost")
     */
    public function number(): Response
    {
        return $this->render('createPost/createPost.html.twig');
    }
}