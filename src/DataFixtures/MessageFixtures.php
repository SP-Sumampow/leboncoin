<?php

namespace App\DataFixtures;

use App\Entity\Message;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class MessageFixtures extends Fixture implements DependentFixtureInterface
{
    public const MESSAGE_AD_1_BUYER_REF = 'msg_ad_1_buyer';
    public const MESSAGE_AD_1_SELLER_REF = 'msg_ad_1_seller';

    public function load(ObjectManager $manager)
    {
        $messageBuyer = new Message();
        $messageBuyer->setAd($this->getReference(AdFixtures::AD_IPHONE13));
        $messageBuyer->setText("Est-ce un vrai iPhone ou un chinois ?");
        $manager->persist($messageBuyer);

        $messageSeller = new Message();
        $messageSeller->setAd($this->getReference(AdFixtures::AD_IPHONE13));
        $messageSeller->setText("À 60 euros l'Iphone 13 pro ouai c'est un vrai !");
        $manager->persist($messageSeller);

        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [AdFixtures::class];
    }
}