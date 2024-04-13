<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BonjourController extends AbstractController
{
    #[Route('/bonjour', name: 'app_bonjour')]
    public function index(): Response
    {
        $prenom = ["Eric" => 52, "Fabien" => 32, "Anne" => 25];

        return $this->render('bonjour/index.html.twig', [
            'controller_name' => 'BonjourController',
            'title' => 'Bienvenue dans ce blog',
            'age' => '31',
            'tableau' => $prenom,
        ]);
    }
}
