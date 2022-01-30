<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $buyer = $this->generateBuyer();
        $manager->persist($buyer);
        $manager->flush();
    }

    public function generateBuyer(): User
    {
        $buyer = new User();
        $buyer->setEmail("buyer@leboncoindupauvre.fr");
        $buyer->setPassword("hackme");
        $buyer->setRoles([""]);

        return $buyer;
    }

    public function generateSeller(): User
    {
        $buyer = new User();
        $buyer->setEmail("seller@leboncoindupauvre.fr");
        $buyer->setPassword("hackme");
        $buyer->setRoles([""]);
        return $buyer;
    }
}