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
     * @Route("/ads",
     *     name="getAds",
     *     methods={"GET","HEAD"})
     */
    public function showAds(LoggerInterface $logger): Response
    {
        return $this->render('ad/ads.html.twig', [
            'ads' => [],
        ]);
    }

    /**
     * @Route("ad/{id}",
     *     name="getAd",
     *     methods={"GET","HEAD"})
     */
    public function showAd( $id): Response
    {
        return $this->render('ad/ad.html.twig', [
            'string' => $id,
        ]);
    }
}