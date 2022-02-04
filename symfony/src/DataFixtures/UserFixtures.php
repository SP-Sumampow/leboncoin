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

        //secound users

        $buyer2 = new User();
        $buyer2->setEmail("buyer2@leboncoindupauvre.fr");
        $buyer2->setPassword('$2y$13$c/umjzqzxH3KNhIEQLwh1ODwS8r2b3/YU1kY0Th6p8lICYclUXvyK'); //hackme
        $this->addReference("buyer2", $seller);
        $buyer2->setRoles([UserACLType::USER]);
        $manager->persist($buyer2);

        $seller2 = new User();
        $seller2->setEmail("seller2@leboncoindupauvre.fr");
        $seller2->setPassword('$2y$13$c/umjzqzxH3KNhIEQLwh1ODwS8r2b3/YU1kY0Th6p8lICYclUXvyK'); //hackme
        $seller2->setRoles([UserACLType::USER]);
        $this->addReference("seller2", $seller);
        $manager->persist($seller2);
        
        //third users
        
        $buyer3 = new User();
        $buyer3->setEmail("buyer3@leboncoindupauvre.fr");
        $buyer3->setPassword('$2y$13$c/umjzqzxH3KNhIEQLwh1ODwS8r2b3/YU1kY0Th6p8lICYclUXvyK'); //hackme
        $this->addReference("buyer3", $seller);
        $buyer3->setRoles([UserACLType::USER]);
        $manager->persist($buyer3);

        $seller3 = new User();
        $seller3->setEmail("seller3@leboncoindupauvre.fr");
        $seller3->setPassword('$2y$13$c/umjzqzxH3KNhIEQLwh1ODwS8r2b3/YU1kY0Th6p8lICYclUXvyK'); //hackme
        $seller3->setRoles([UserACLType::USER]);
        $this->addReference("seller3", $seller);
        $manager->persist($seller3);

        $manager->flush();
    }

    public function generateBuyer(): User
    {
        $buyer = new User();
        $buyer->setEmail("buyer@leboncoindupauvre.fr");
        $buyer->setPassword('$2y$13$c/umjzqzxH3KNhIEQLwh1ODwS8r2b3/YU1kY0Th6p8lICYclUXvyK'); //hackme
        $buyer->setRoles([UserACLType::USER]);
        return $buyer;
    }

    public function generateSeller(): User
    {
        $seller = new User();
        $seller->setEmail("seller@leboncoindupauvre.fr");
        $seller->setPassword('$2y$13$c/umjzqzxH3KNhIEQLwh1ODwS8r2b3/YU1kY0Th6p8lICYclUXvyK'); //hackme
        $seller->setRoles([UserACLType::ADMIN]);
        return $seller;
    }
}