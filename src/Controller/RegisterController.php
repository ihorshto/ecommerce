<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegisterController extends AbstractController
{
    private $passwordHasher;
    private $manager; // Add this property

    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $manager)
    {
        $this->passwordHasher = $passwordHasher;
        $this->manager = $manager;
    }

    #[Route('/register', name: 'register')]
    public function index(Request $request): Response
    {
        $user = new User;

        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($this->passwordHasher->hashPassword(
                $user,
                $user->getPassword()
            ));
            // dd($user);

            $this->manager->persist($user); // Use $this->manager instead of $manager
            $this->manager->flush();
            
            $this->addFlash(
                'success',
                "Le compte {$user->getEmail()} a bien été créé"
            );

            return $this->redirectToRoute('app_account');
        }
        
        return $this->render('register/index.html.twig',[
            "form"=>$form->createView() ,
        ]);
    }
}
