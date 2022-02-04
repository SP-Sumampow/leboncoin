<?php

namespace App\DataFixtures;

use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class TagFixtures extends Fixture
{
    public const TAG_SMARTPHONE = 'smartphone';
    public const TAG_ELECTRONICS = 'electronics';
    public const TAG_CLOTHES = 'clothes';
    public const TAG_SHOES = 'shoes';
    public const TAG_BOOK = 'book';
    public const TAG_DRESS = 'dress';

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

        $tag3 = new Tag();
        $tag3->setName("clothes");
        $this->addReference(TagFixtures::TAG_CLOTHES, $tag3);
        $manager->persist($tag3);

        $tag4 = new Tag();
        $tag4->setName("shoes");
        $this->addReference(TagFixtures::TAG_SHOES, $tag4);
        $manager->persist($tag4);

        $tag5 = new Tag();
        $tag5->setName("book");
        $this->addReference(TagFixtures::TAG_BOOK, $tag5);
        $manager->persist($tag5);

        $tag6 = new Tag();
        $tag6->setName("dress");
        $this->addReference(TagFixtures::TAG_DRESS, $tag6);
        $manager->persist($tag6);

        $manager->flush();
    }

}