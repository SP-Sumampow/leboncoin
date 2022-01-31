<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\UserACLType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public const USER_SELLER_REFERENCE = 'user-seller';
    public const USER_BUYER_ADMIN_REFERENCE = 'user-buyer-admin';

    public function load(ObjectManager $manager)
    {
        $buyer = $this->generateBuyer();
        $this->addReference(UserFixtures::USER_BUYER_ADMIN_REFERENCE, $buyer);
        $manager->persist($buyer);

        $seller = $this->generateSeller();
        $this->addReference(UserFixtures::USER_SELLER_REFERENCE, $seller);
        $manager->persist($seller);

        $manager->flush();
    }

    public function generateBuyer(): User
    {
        $buyer = new User();
        $buyer->setEmail("buyer@leboncoindupauvre.fr");
        $buyer->setPassword("hackme");
        $buyer->setRoles([UserACLType::USER]);
        return $buyer;
    }

    public function generateSeller(): User
    {
        $seller = new User();
        $seller->setEmail("seller@leboncoindupauvre.fr");
        $seller->setPassword("hackme");
        $seller->setRoles([UserACLType::ADMIN]);
        return $seller;
    }
}