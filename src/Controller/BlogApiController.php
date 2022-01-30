<?php

// src/Controller/BlogApiController.php
namespace App\Controller;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Service\MessageGenerator;

/**
 * @Route("/api", name="blog_")
 */

class BlogApiController extends AbstractController
{
    /**
     * @Route("/posts/{id}",
     *     name="contact",
     *     methods={"GET","HEAD"})
     */
    public function show(int $id, LoggerInterface $logger, MessageGenerator $messageGenerator): Response
    {
        $this->addFlash(
            'notice',
            'Your changes were saved!'
        );
        $logger->info("coucou");
        return new JsonResponse(['username' => $messageGenerator->getHappyMessage()]);
    }

    /**
     * @Route("/posts/{id}", methods={"PUT"})
     */
    public function edit(int $id): Response
    {
        return new JsonResponse("lol");
    }
}