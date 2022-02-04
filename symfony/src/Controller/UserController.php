<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * + @Route("/user", "user")
     */
    public function userProfile(): Response
    {
        return $this->render('user/user.html.twig');
    }

    /**
     * + @Route("/user/buyAds", "buy_ads")
     */
    public function buyAds(): Response
    {
        return $this->render('user/buyAds.html.twig');
    }

    /**
     * + @Route("/user/sellAds", "sell_ads")
     */
    public function sellAds(): Response
    {
        return $this->render('user/sellAds.html.twig');
    }
}