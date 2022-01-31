<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public const TAG_SMARTPHONE = 'smartphone';
    public const TAG_ELECTRONICS = 'electronics';

    public function load(ObjectManager $manager)
    {
        $tag1 = new Tag();
        $tag1->setName("smartphone");
        $this->addReference(TagFixtures::TAG_SMARTPHONE, $tag1);
        $manager->persist($tag1);

        $tag2 = new Tag();
        $tag2->setName("electronics");
        $this->addReference(TagFixtures::TAG_ELECTRONICS, $tag2);
        $manager->persist($tag2);

        $manager->flush();
    }

}