<?php

namespace App\Controller\api;

use App\Repository\AdRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

class ApiAdController extends AbstractController
{
    /**
     * @Route("/api/ads", name="api_ads_get", methods={"GET"})
     */
    public function getAds(AdRepository $repository, SerializerInterface $serializer): Response
    {
        return new Response(
            $serializer->serialize($repository->findAll(), 'json', ['groups' => 'list_ad']),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }

    /**
     * @Route("/api/ad/{tagId}", name="api_ads_for_tag_get", methods={"GET"})
     */
    public function getAdsForTagId(int $tagId): Response
    {
        return new JsonResponse(['username' => $tagId]);
    }

    /**
     * @Route("/api/{id}", name="api_ad_for_id_get", methods={"GET"})
     */
    public function getAdForId(int $id): Response
    {
        return new JsonResponse(['username' => $id]);
    }

    /**
     * @Route("/api/ad/{id}", name="api_ad_post", methods={"POST"})
     */
    public function postAd(): Response
    {
        return new JsonResponse(['username' => "lol"]);
    }

    /**
     * @Route("/api/ad/{id}", name="api_ad_for_id_put", methods={"PUT"})
     */
    public function putAdForId(int $id): Response
    {
        return new JsonResponse(['username' => "lol"]);
    }

    /**
     * @Route("/api/ad/{id}", name="api_ad_for_id_delete", methods={"DELETE"})
     */
    public function deleteAdForId(int $id): Response
    {
        return new JsonResponse(['username' => "lol"]);
    }
}