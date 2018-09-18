<?php

/**
 * This file is part of the Aero package.
 *
 * (c) Aerocontact Group <thomas@thiebaudet.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\DataFixtures;

use App\Entity\Tag;
use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     *
     * @throws \Exception
     */
    public function load(ObjectManager $manager)
    {
        // Load some tags
        for ($i = 0; $i < 40; $i++) {
            $tag = new Tag();
            $tag->setName("Tag numéro $i");
            $manager->persist($tag);
        }

        // Load some articles
        for ($i = 0; $i < 100; $i++) {
            $article = new Article();
            $article->setTitle("Article numéro $i");
            $article->setSlug("article-numero-$i");
            $article->setSubtitle("Juste un sous-titre en bois.");
            $article->setBody("Hello world!");
            $article->setOnline((bool)random_int(0, 1));
            $manager->persist($article);
        }

        $manager->flush();
    }
}