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

    public function load(ObjectManager $manager)
    {
        $soldAd = $this->generateSoldAd();
        $this->addReference(AdFixtures::AD_IPHONE13, $soldAd);
        $manager->persist($soldAd);
        $manager->flush();
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