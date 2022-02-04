<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\TagRepository;
use App\Repository\UserRepository;
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
        $user = $this->getUser();

        if (null === $user || !$user instanceof User) {
            // do something about the wrong types, that you might get from getSecurity()->getUser(), e.g. return or throw an exception
            throw Exception(sprintf('Expected App\\Entity\\User, got %s', $user === null ? 'null' : get_class($user)));
        }

        $tags = $tagRepository->findAll();
        return $this->render('user/sellAds.html.twig', [
            'tags' => $tags,
            'ads' => $user->getBuyAds()
        ]);
    }

    /**
     * + @Route("/user/sellAds", "sell_ads")
     */
    public function sellAds(TagRepository $tagRepository, UserRepository $userRepository): Response
    {
        $user = $this->getUser();

        if (null === $user || !$user instanceof User) {
            // do something about the wrong types, that you might get from getSecurity()->getUser(), e.g. return or throw an exception
            throw Exception(sprintf('Expected App\\Entity\\User, got %s', $user === null ? 'null' : get_class($user)));
        }

        $tags = $tagRepository->findAll();
        return $this->render('user/sellAds.html.twig', [
            'tags' => $tags,
            'ads' => $user->getSellAds()
        ]);
    }

}