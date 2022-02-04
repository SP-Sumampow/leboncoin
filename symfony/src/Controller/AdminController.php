<?php

namespace App\Controller;

use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * + @Route("/admin/users", "admin_user")
     */
    public function adminUsers(TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render("admin/adminUsers.html.twig", [
            'tags' => $tags
        ]);
    }

    /**
     * + @Route("/admin/ads", "admin_ads")
     */
    public function adminAds(TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('admin/adminAds.html.twig', [
            'tags' => $tags
        ]);
    }
}