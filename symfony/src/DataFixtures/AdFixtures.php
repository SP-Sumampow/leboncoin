<?php

namespace App\DataFixtures;

use App\Entity\Ad;
use App\Entity\AdStatusType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AdFixtures extends Fixture implements DependentFixtureInterface
{
    public const AD_IPHONE13 = 'msg_ad_1_buyer';
    public const AD_2_RED_DRESS = 'msg_ad_2_red_dress';
    public const AD_2_TSHIRT = 'msg_ad_tshirt';
    public const AD_SYMFONYBOOK = 'msg_ad_symfony_book';

    public function load(ObjectManager $manager)
    {   
        $soldAd = $this->generateSoldAd();
        $this->addReference(AdFixtures::AD_IPHONE13, $soldAd);
        $manager->persist($soldAd);

        $redDressAd = $this->generateAvailableAdRedDress();
        $this->addReference(AdFixtures::AD_2_RED_DRESS, $redDressAd);
        $manager->persist($redDressAd);

        $tshirtAd = $this->generateAvailableAdTshirt();
        $this->addReference(AdFixtures::AD_2_TSHIRT, $tshirtAd);
        $manager->persist($tshirtAd);

        $symfonyBookAd = $this->generateAvailableAdSymfonyBook();
        $this->addReference(AdFixtures::AD_SYMFONYBOOK, $symfonyBookAd);
        $manager->persist($symfonyBookAd);

        $manager->flush();
    }

    public function generateAvailableAdSymfonyBook(): Ad
    {
        $ad4 = new Ad();
        $ad4->setTitle("syfont book");
        $ad4->setSeller($this->getReference("seller3"));
        $ad4->addTag($this->getReference(TagFixtures::TAG_BOOK));
        $ad4->setReview($this->getReference(ReviewFixtures::REVIEW_AD_4));
        $ad4->setPostalCode("93100");
        $ad4->setPrice(6000);
        $ad4->setDescription("Symfony book comme neuf");
        $ad4->setCurrency("EUR");
        $ad4->setValidationCode("AB69EF");
        $ad4->setStatus(AdStatusType::AVAILABLE->value);
        $ad4->setCurrency("EUR");
        return $ad4;
    }

    public function generateAvailableAdTshirt(): Ad
    {
        $ad3 = new Ad();
        $ad3->setTitle("t-shirt!!");
        $ad3->setSeller($this->getReference("seller2"));
        $ad3->addTag($this->getReference(TagFixtures::TAG_CLOTHES));
        $ad3->setReview($this->getReference(ReviewFixtures::REVIEW_AD_3));
        $ad3->setPostalCode("93100");
        $ad3->setPrice(6000);
        $ad3->setDescription("Adidas t-shirt. taille XXL");
        $ad3->setCurrency("EUR");
        $ad3->setValidationCode("AB69EF");
        $ad3->setStatus(AdStatusType::AVAILABLE->value);
        $ad3->setCurrency("EUR");
        return $ad3;
    }

    public function generateAvailableAdRedDress(): Ad
    {
        $ad2 = new Ad();
        $ad2->setTitle("iPhone 13 pro tout neuf !!");
        $ad2->setSeller($this->getReference("seller2"));
        $ad2->addTag($this->getReference(TagFixtures::TAG_CLOTHES));
        $ad2->setReview($this->getReference(ReviewFixtures::REVIEW_AD_2));
        $ad2->setPostalCode("93100");
        $ad2->setPrice(6000);
        $ad2->setDescription("Magnifique iPhone full config ! encore dans son emballage, j'ai reçu deux iPhone pour noël");
        $ad2->setCurrency("EUR");
        $ad2->setValidationCode("AB69EF");
        $ad2->setStatus(AdStatusType::AVAILABLE->value);
        $ad2->setCurrency("EUR");
        return $ad2;
    }

    public function generateSoldAd(): Ad
    {
        $ad = new Ad();
        $ad->setTitle("iPhone 13 pro tout neuf !!");
        $ad->setBuyer($this->getReference(UserFixtures::USER_BUYER_ADMIN_REFERENCE));
        $ad->setSeller($this->getReference(UserFixtures::USER_SELLER_REFERENCE));
        $ad->addTag($this->getReference(TagFixtures::TAG_ELECTRONICS));
        $ad->addTag($this->getReference(TagFixtures::TAG_SMARTPHONE));
        $ad->setReview($this->getReference(ReviewFixtures::REVIEW_AD_1));
        $ad->setPostalCode("93100");
        $ad->setPrice(6000);
        $ad->setDescription("Magnifique iPhone full config ! encore dans son emballage, j'ai reçu deux iPhone pour noël");
        $ad->setCurrency("EUR");
        $ad->setValidationCode("AB69EF");
        $ad->setStatus(AdStatusType::SOLD->value);
        $ad->setCurrency("EUR");
        return $ad;
    }

    public function getDependencies(): array
    {
        return [UserFixtures::class, ReviewFixtures::class, TagFixtures::class];
    }
}