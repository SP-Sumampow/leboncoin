<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * + @Route("/admin/users", "admin_user")
     */
    public function adminUsers(): Response
    {
        return $this->render("admin/adminUsers.html.twig");
    }

    /**
     * + @Route("/admin/ads", "admin_ads")
     */
    public function adminAds(): Response
    {
        return $this->render('admin/adminAds.html.twig');
    }
}