<?php

namespace App\Controller;

use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdController extends AbstractController
{
    /**
     * @Route("/ads/{categoryId}",
     *     name="getAds",
     *     methods={"GET","HEAD"})
     */
    public function showAds(LoggerInterface $logger, string $categoryId): Response
    {
        return $this->render('ad/ads.html.twig', [
            'string' => $categoryId,
        ]);
    }

    /**
     * @Route("ad/{id}",
     *     name="getAd",
     *     methods={"GET","HEAD"})
     */
    public function showAd(string $id): Response
    {
        return $this->render('ad/ad.html.twig', [
            'string' => $id,
        ]);
    }

    /**
     * @Route("postAd",
     *     name="postAd",
     *     methods={"GET","POST"})
     */
    public function postAd(): Response
    {
        return $this->render('ad/postAd.html.twig');
    }
}