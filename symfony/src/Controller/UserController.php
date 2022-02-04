<?php

namespace App\Controller;

use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * + @Route("/user", "user")
     */
    public function userProfile(TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('user/user.html.twig', [
            'tags' => $tags
        ]);
    }

    /**
     * + @Route("/user/buyAds", "buy_ads")
     */
    public function buyAds(TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('user/buyAds.html.twig', [
            'tags' => $tags
        ]);
    }

    /**
     * + @Route("/user/sellAds", "sell_ads")
     */
    public function sellAds(TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('user/sellAds.html.twig', [
            'tags' => $tags,
        ]);
    }
}