<?php

namespace App\Controller\api;

use App\Entity\Ad;
use App\DataFixtures\ReviewFixtures;
use App\DataFixtures\TagFixtures;
use App\DataFixtures\UserFixtures;
use App\Entity\AdStatusType;
use App\Entity\User;
use App\Repository\AdRepository;
use App\Repository\TagRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\GroupSequence;
use Symfony\Component\Validator\Constraints as Assert;

class ApiAdController extends AbstractController
{
    /**
     * @Route("/api/ads", name="api_ads_get", methods={"GET"})
     */
    public function getAds(AdRepository $repository, SerializerInterface $serializer, Request $request): Response
    {
        $user = $this->getUser();

        if (!isset($user)) {
            return new JsonResponse("You should be authentificate", 401);
        }

        $categoryId = $request->query->get('categoryId');

        return match (isset($categoryId)) {
            true => new Response(
                $serializer->serialize($repository->findAllAdForCategoryId($categoryId), 'json', ['groups' => 'list_ad']),
                Response::HTTP_OK,
                ['Content-type' => 'application/json']
            ),
            false => new Response(
                $serializer->serialize($repository->findAll(), 'json', ['groups' => 'list_ad']),
                Response::HTTP_OK,
                ['Content-type' => 'application/json']
            ),
        };
    }

    /**
     * @Route("/api/ad/{id}", name="api_ad_for_id_get", methods={"GET"})
     */
    public function getAdForId(int $id, AdRepository $repository, SerializerInterface $serializer): Response
    {
        $user = $this->getUser();

        if (!isset($user)) {
            return new JsonResponse("You should be authentificate", 401);
        }

        return new Response(
            $serializer->serialize($repository->find($id), 'json', ['groups' => 'show_ad']),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }

    /**
     * @Route("/api/ad", name="api_ad_post", methods={"POST"})
     */
    public function postAd(Request $request, AdRepository $adRepository, SerializerInterface $serializer, TagRepository $tagRepository, ManagerRegistry $doctrine): Response
    {
        $user = $this->getUser();

        if (!isset($user)) {
            return new JsonResponse("You should be authentificate", 401);
        }

        $title = $request->request->get("title");
        $tagIds = $request->request->all()["tags"];
        $postalCode = $request->request->get("postalCode");
        $price = $request->request->get("price");
        $description = $request->request->get("description");
        $currency = $request->request->get("currency");

        $validator = Validation::createValidator();

        $input = [
            'title' => $title,
            'postalCode' => $postalCode,
            'price' => $price,
            'description' => $description,
            'currency' => $currency,
        ];

        $groups = new Assert\GroupSequence(['Default', 'custom']);

        $constraint = new Assert\Collection([
            'title' => [new Assert\NotBlank()],
            'postalCode' => [new Assert\NotBlank()],
            'price' => [new Assert\NotBlank()],
            'description' => [new Assert\NotBlank()],
            'currency' => [new Assert\NotBlank()],
        ]);

        $violations = $validator->validate($input, $constraint, $groups);

        if (count($violations) > 0) {
            $errorsString = (string)$violations;
            return $this->json($errorsString, 400);
        }

        $ad = new Ad();
        $ad->setTitle($title);
        $ad->setSeller($user);
        foreach ($tagIds as &$tagId) {
            $tag = $tagRepository->find($tagId);
            if (!empty($tag)) {
                $ad->addTag($tag);
            }
        }
        $ad->setPostalCode($postalCode);
        $ad->setPrice($price);
        $ad->setDescription($description);
        $ad->setCurrency($currency);
        $ad->setValidationCode(str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT));
        $ad->setStatus(AdStatusType::AVAILABLE->value);

        $entityManager = $doctrine->getManager();

        $entityManager->persist($ad);
        $entityManager->flush();

        return new Response(
            $serializer->serialize($ad, 'json', ['groups' => 'created_ad']),
            Response::HTTP_OK,
            ['Content-type' => 'application/json']
        );
    }

    /**
     * @Route("/api/ad/{id}", name="api_ad_for_id_put", methods={"PUT"})
     */
    public function putAdForId(int $id): Response
    {
        $user = $this->getUser();

        if (!isset($user)) {
            return new JsonResponse("You should be authentificate", 401);
        }
        return new JsonResponse(['username' => "lol"]);
    }

    /**
     * @Route("/api/ad/{id}", name="api_ad_for_id_delete", methods={"DELETE"})
     */
    public function deleteAdForId(ManagerRegistry $doctrine, int $id, AdRepository $repository): Response
    {
        $entityManager = $doctrine->getManager();
        $ad = $repository->find($id);
        $entityManager->remove($ad);
        $entityManager->flush();
        return new JsonResponse(['status' => "ok"]);
    }
}