<?php

namespace App\DataFixtures;

use App\Entity\Review;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ReviewFixtures extends Fixture
{
    public const REVIEW_AD_1 = 'ad_1_review';
    public const REVIEW_AD_2 = 'ad_2_review';
    public const REVIEW_AD_3 = 'ad_3_review';
    public const REVIEW_AD_4 = 'ad_4_review';
    public const REVIEW_AD_5 = 'ad_5_review';
    public const REVIEW_AD_6 = 'ad_6_review';
    public const REVIEW_AD_7 = 'ad_7_review';
    public const REVIEW_AD_8 = 'ad_8_review';

    public function load(ObjectManager $manager)
    {
        $review = new Review();
        $review->setText("iPhone chinois c'est du fake !! je me suis fait escroquer !!!");
        $review->setRating(0);
        $this->addReference(ReviewFixtures::REVIEW_AD_1, $review);
        $manager->persist($review);

        $review2 = new Review();
        $review2->setText("iPhone chinois c'est du fake !! je me suis fait escroquer !!!");
        $review2->setRating(0);
        $this->addReference(ReviewFixtures::REVIEW_AD_2, $review2);
        $manager->persist($review2);

        $review3 = new Review();
        $review3->setText("top !!!");
        $review3->setRating(5);
        $this->addReference(ReviewFixtures::REVIEW_AD_3, $review3);
        $manager->persist($review3);

        $review4 = new Review();
        $review4->setText("top !!!");
        $review4->setRating(5);
        $this->addReference(ReviewFixtures::REVIEW_AD_4, $review4);
        $manager->persist($review4);

        $review5 = new Review();
        $review5->setText("top !!!");
        $review5->setRating(5);
        $this->addReference(ReviewFixtures::REVIEW_AD_5, $review5);
        $manager->persist($review5);

        $review6 = new Review();
        $review6->setText("top !!!");
        $review6->setRating(5);
        $this->addReference(ReviewFixtures::REVIEW_AD_6, $review6);
        $manager->persist($review6);

        $review7 = new Review();
        $review7->setText("top !!!");
        $review7->setRating(4);
        $this->addReference(ReviewFixtures::REVIEW_AD_7, $review7);
        $manager->persist($review3);

        $review8 = new Review();
        $review8->setText("top !!!");
        $review8->setRating(5);
        $this->addReference(ReviewFixtures::REVIEW_AD_8, $review8);
        $manager->persist($review8);

        $manager->flush();
    }
}