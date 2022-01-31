<?php

namespace App\DataFixtures;

use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ReviewFixtures extends Fixture
{
    public const REVIEW_AD_1 = 'ad_1_review';

    public function load(ObjectManager $manager)
    {
        $review = new Review();
        $review->setText("iPhone chinois c'est du fake !! je me suis fait escroquer !!!");
        $review->setRating(0);
        $this->addReference(ReviewFixtures::REVIEW_AD_1, $review);
        $manager->persist($review);
        $manager->flush();
    }
}