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
    public const MEDIA_AD_CLEANCODE_BOOK = 'photo_cleancode_book';
    public const MEDIA_AD_SYMFONY_BOOK = 'photo_symfony_book';
    public const MEDIA_AD_ADIDAS_TSHIRT = 'photo_adidas_tshirt';
    public const MEDIA_AD_NEWBALANCE_SHOES = 'photo_newbalance_shoes';

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

        $media4 = new Media();
        $media4->setType(MediaType::PICTURE->value);
        $media4->setUrl("https://firebasestorage.googleapis.com/v0/b/testo--backoffice.appspot.com/o/cleanCodeBook.jpg?alt=media&token=50e597ad-ac1f-44f5-b203-1725b48b766b");
        $this->addReference(MediaFixtures::MEDIA_AD_CLEANCODE_BOOK, $media4);
        $media4->setAd($this->getReference(AdFixtures::AD_CLEANCODEBOOK));
        $manager->persist($media4);

        $media5 = new Media();
        $media5->setType(MediaType::PICTURE->value);
        $media5->setUrl("https://firebasestorage.googleapis.com/v0/b/testo--backoffice.appspot.com/o/symfony5-book-cover.png?alt=media&token=7af6cbea-1e3b-4931-87ca-b710e02a6cc6");
        $this->addReference(MediaFixtures::MEDIA_AD_SYMFONY_BOOK, $media5);
        $media5->setAd($this->getReference(AdFixtures::AD_SYMFONYBOOK));
        $manager->persist($media5);

        $media6 = new Media();
        $media6->setType(MediaType::PICTURE->value);
        $media6->setUrl("https://firebasestorage.googleapis.com/v0/b/testo--backoffice.appspot.com/o/adidasTshirt.jpeg?alt=media&token=a74292cf-1b43-46bb-b795-603fee0e1d17");
        $this->addReference(MediaFixtures::MEDIA_AD_ADIDAS_TSHIRT, $media6);
        $media6->setAd($this->getReference(AdFixtures::AD_2_TSHIRT));
        $manager->persist($media6);

        $media7 = new Media();
        $media7->setType(MediaType::PICTURE->value);
        $media7->setUrl("https://firebasestorage.googleapis.com/v0/b/testo--backoffice.appspot.com/o/newBalance327.jpeg?alt=media&token=6b3a8eda-f838-4058-ae99-cc81532fef4d");
        $this->addReference(MediaFixtures::MEDIA_AD_NEWBALANCE_SHOES, $media7);
        $media7->setAd($this->getReference(AdFixtures::AD_NEWBALANCESHOES));
        $manager->persist($media7);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [AdFixtures::class];
    }
}