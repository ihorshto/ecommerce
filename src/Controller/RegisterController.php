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
    private $manager;
    public function __construct(UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $manager)
    {
        $this->passwordHasher = $passwordHasher;
        $this->manager = $manager;
    }

    #[Route('/inscription', name: 'register')]
    public function index(Request $request): Response
    {
        $user = new User;
        $form = $this->createForm(RegisterType::class, $user);

        $form->handleRequest($request);
        // dump($user); // équivalent de var_dump on peut utiliser dd() => équivalent de dump and die
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setPassword($this->passwordHasher->hashPassword(
                $user,
                $user->getPassword()
            ));
            // $user->setEmail('ihor@gmail.com');
            $this->manager->persist($user); // Use $this->manager instead of $manager
            // dd($user->getEmail());
            
            $this->manager->flush();
            
            $this->addFlash(
                'success',
                "Le compte {$user->getEmail()} a bien été créé"
            );

            return $this->redirectToRoute('home');
        }
        
        return $this->render('register/index.html.twig',[
            "form"=>$form->createView() ,
        ]);
    }
}
