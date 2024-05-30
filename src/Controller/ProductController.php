<?php
namespace App\Controller;
use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route("/nos-produits", name: "products")]
public function index( ProductRepository $repo): Response
{
   $products = $repo->findAll(); //recupère tous les enregistrements de la table visée
    // dd($products);
    return $this->render('product/index.html.twig', [
        'products' => $products
    ]);
}

#[Route("/produit/{slug}", name: "product")]
public function show(Product $product): Response
{
// $repo = $this->getDoctrine()->getRepository(product::class);
// findOneByX avec X représentant n'importe quel champ de la table, trouve un seul élément
// findByX trouve plusieurs éléments => tableau
// on récupère le produit qui correspond au slug
//$product = $repo -> findOneBy(['slug'=>$slug]);
// $product = $repo-> findOneBySlug($slug);
//dump($product);
return $this->render('product/show.html.twig', [
    'product' => $product
    ]);
}

}