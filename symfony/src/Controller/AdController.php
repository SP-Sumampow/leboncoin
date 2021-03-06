<?php

namespace App\Controller;

use App\Repository\AdRepository;
use App\Repository\TagRepository;
use App\Service\MessageGenerator;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdController extends AbstractController
{
    /**
     * @Route("/ads/{tagId}",
     *     name="getAds",
     *     methods={"GET","HEAD"})
     */
    public function showAds(LoggerInterface $logger, string $tagId, AdRepository $adRepository, TagRepository $tagRepository): Response
    {
        $tag = $tagRepository->find($tagId);
        $tags = $tagRepository->findAll();

        return $this->render('ad/ads.html.twig', [
            'tags' => $tags,
            'tagName' => $tag->getName(),
            'ads' => $adRepository->findAllAdForCategoryId($tagId)
        ]);
    }

    /**
     * @Route("ad/{id}",
     *     name="getAd",
     *     methods={"GET","HEAD"})
     */
    public function showAd(string $id, AdRepository $adRepository, TagRepository $tagRepository): Response
    {
        $tags = $tagRepository->findAll();
        return $this->render('ad/ad.html.twig', [
            'tags' => $tags,
            'ad' => $adRepository->find($id),
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

    /**
     * @Route("searchAd",
     *     name="searchAd",
     *     methods={"POST"})
     */
    public function searchAd(AdRepository $adRepository, TagRepository $tagRepository, Request $request): Response
    {
        $searchAd = $request->request->get("searchAd");

        $tags = $tagRepository->findAll();

        return $this->render('ad/ads.html.twig', [
            'tags' => $tags,
            'tagName' => $searchAd,
            'ads' => $adRepository->searchAd($searchAd)
        ]);
    }
}