<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 9; $i++) {
            $article = new Article();
            $article->setTitle($faker->realText(rand(20, 40)));
            $article->setContent($faker->paragraph($nbSentences = 30, $variableNbSentences = true));
            $article->setCover($faker->file($source = 'public/fake-images', $target = 'public/uploads/covers', false));
            $manager->persist($article);

            $manager->flush();
        }
    }
}
