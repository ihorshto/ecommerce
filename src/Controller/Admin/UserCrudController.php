<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\QueryBuilder as ORMQueryBuilder;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FieldCollection;
use EasyCorp\Bundle\EasyAdminBundle\Collection\FilterCollection;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Dto\EntityDto;
use EasyCorp\Bundle\EasyAdminBundle\Dto\SearchDto;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Orm\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserCrudController extends AbstractCrudController
{
    private $passwordHasher;
    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('firstName')->setLabel('Prénom'),
            TextField::new('lastName')->setLabel('Nom'),
            EmailField::new('Email'),
            TextField::new('Password')->setFormType(PasswordType::class)->setLabel('mot de passe')->onlyWhenCreating()->setRequired(true),
            TextField::new('password_confirm')->setFormType(PasswordType::class)->setLabel('confirmation mot de passe')->onlyWhenCreating()->setRequired(true),
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            // ->remove('index', 'delete') // suppression du bouton delete =>
            ->add(Crud::PAGE_INDEX, 'detail') // ajout du bouton de la consultation de l'enregistrement
            //https://symfony.com/bundles/EasyAdminBundle/current/actions.html#updating-an-action
            // mise à jour d'une action qui existe déjà => Attention ne pas la supprimer avant avec remove
            ->update(Crud::PAGE_INDEX, Action::DELETE, function (Action $action) {
                $action->setIcon('fas fa-trash')
                ->displayIf(static function ($entity) {
                    foreach ($entity->getRoles() as $role) {
                        return $role != 'ROLE_ADMIN';
                    }
                });
                return $action;
            })
            ->update(Crud::PAGE_DETAIL, Action::DELETE, function (Action $action) {
            $action
            ->setIcon('fas fa-trash')
            ->displayIf(static function ($entity) {
                foreach ($entity->getRoles() as $role) {
                    return $role != 'ROLE_ADMIN';
                }
            });
            return $action;
        })
        ->update('index', Action::NEW, function (Action $action) {
            $action->setLabel('Créer un Utilisateur');
                return $action;
        });
    }

    // ajout d'un filtre pour filtrer les utilisateurs
    public function configureFilters(Filters $filters): Filters
    {
        return $filters
            ->add('firstName')
            ->add('lastName')
            ->add('email')
            // ->add('active')
            ->add('roles');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud->setFormOptions(['validation_groups' => ['register']])
            ->setEntityLabelInPlural('Utilisateurs')
            ->setPageTitle('new', 'Créer un Utilisateur')
            ->setPageTitle('edit', function ($entity) {
                return 'Utilisateur d\'Id: ' . $entity->getId();
            })
            ->setPageTitle('detail', function ($entity) {
                return 'Utilisateur d\'Id: ' . $entity->getId();
            });
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        $entityInstance->setPassword($this->passwordHasher->hashPassword(
            $entityInstance,
            $entityInstance->getPassword()
        ));
        $entityManager->persist($entityInstance);
        $entityManager->flush();
    }

    // public function createIndexQueryBuilder(SearchDto $searchDto, EntityDto $entityDto, FieldCollection $fields, FilterCollection $filters): ORMQueryBuilder
    // {
    //     $response = $this->get(EntityRepository::class)->createQueryBuilder($searchDto, $entityDto, $fields, $filters);
    //     // $response->andwhere('entity.active = false');
    //     $response->andwhere("entity.roles LIKE '%ROLE_ADMIN%'") // va voir par exemple dans la chaine ["ROLE_ADMIN","ROLE_USER"] si ROLE_ADMIN est présent
    //     ->orderBy('entity.id','DESC');
    //     return $response;
    // }
}
