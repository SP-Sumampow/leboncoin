<?php

namespace App\DataFixtures;

use App\Entity\Media;
use App\Entity\MediaType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MediaFixtures extends Fixture implements DependentFixtureInterface
{
    public const MEDIA_AD_1_IPHONE13_1 = 'photo_ad1_iphone13_1';
    public const MEDIA_AD_1_IPHONE13_2 = 'photo_ad1_iphone13_2';

    public const MEDIA_AD_DRESS = 'photo_dress_1';

    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setType(MediaType::PICTURE->value);
        $media1->setUrl("https://firebasestorage.googleapis.com/v0/b/boncoin-11b16.appspot.com/o/36833_4776bbd6-9959-4ea1-85e1-3214d47d481f.jpg?alt=media&token=4785f898-e66b-4dd0-bbce-3cf90385df2f");
        $this->addReference(MediaFixtures::MEDIA_AD_1_IPHONE13_1, $media1);
        $media1->setAd($this->getReference(AdFixtures::AD_IPHONE13));
        $manager->persist($media1);

        $media2 = new Media();
        $media2->setType(MediaType::PICTURE->value);
        $media2->setUrl("https://firebasestorage.googleapis.com/v0/b/boncoin-11b16.appspot.com/o/36833_ab6e5f8b-b5ae-4c57-86df-89d0f2b47fba.jpg?alt=media&token=87e073a6-a635-41db-893b-461b9e0b64bd");
        $this->addReference(MediaFixtures::MEDIA_AD_1_IPHONE13_2, $media2);
        $media2->setAd($this->getReference(AdFixtures::AD_IPHONE13));
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setType(MediaType::PICTURE->value);
        $media3->setUrl("https://firebasestorage.googleapis.com/v0/b/testo--backoffice.appspot.com/o/a5e577afd7ae450bb6c5ddf1daee2f78.jpeg?alt=media&token=0569c56f-3239-4ddc-895b-1c200f2c9f9e");
        $this->addReference(MediaFixtures::MEDIA_AD_DRESS, $media3);
        $media3->setAd($this->getReference(AdFixtures::AD_2_RED_DRESS));
        $manager->persist($media3);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [AdFixtures::class];
    }
}