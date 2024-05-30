<?php
namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use Faker\Factory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Cocur\Slugify\Slugify;
class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
        
        // création des produits
        for ($i = 1; $i < 5; $i++) {
            // on récupère l'objet catégorie (qui ont été crées
            $categorie = $this->getReference('categorie_' . $faker->numberBetween(1, 10), Category::class);
            $product = new Product();
            $this->addReference('categorie_' . $i, $categorie);
            $product->setCategory($categorie);
            $product->setName($faker->word(3, true));
            $product->setDescription($faker->paragraph(2));
            $product->setPrice($faker->numberBetween(10, 200));
            $product->setSubtitle($faker->word(3, true));
            $slugify = new Slugify();
            $product->setSlug($slugify->slugify($product->getName()));
            $product->setIllustration($faker->imageUrl(360, 360,
            'PRODUCTS'));
            $manager->persist($product);
        }
        $manager->flush();
    }
}