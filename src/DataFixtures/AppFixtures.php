<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // création des catégories
        for ($i = 1; $i < 11; $i++) {
            $categorie = new Category();
            $categorie->setName('categorie_' . $i);
            $manager->persist($categorie);
        }
        $manager->flush();
    }
}
