<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * + @Route("/")
     */
    public function home(AdRepository $adRepository, TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('home/home.html.twig', [
            'tags' => $tags,
            'lastAdArrived' => $adRepository->lastAdArrived(6)
        ]);
    }
}