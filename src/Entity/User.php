<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: "email", message: "cet email est déjà utilisé", groups: ["register"])]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    #[Assert\Email(message: "L'email {{ value }} n'est pas un email valide !", groups: ["register"])]
    private ?string $email = null;

    /**
     * @var list<string> The user roles
     */
    #[ORM\Column]
    private array $roles = [];

    /**
    * @var string The hashed password
     */
    #[ORM\Column(length: 180)]
    #[Assert\Length(min: 3, minMessage: "Votre mot de passe doit faire un minimun de 8 caractères", groups: ["register"])]
    // #[Assert\Regex(
    //     pattern: "#(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{8,}#", 
    //     match: true, 
    //     message: "le mot de passe doit contenir au moins 1 chiffre, 1 lettre minuscule, 1 lettre majuscule et doit faire au moins 8 caractères")]
    private ?string $password = null;

    #[Assert\EqualTo(propertyPath: "password", message: "Les deux mots de passe ne sont pas identiques", groups: ["register"])]
    public $password_confirm;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Vous devez renseigner votre prénom", groups: ["register"])]
    #[Assert\Length(
        min: 3, 
        max: 20,
        minMessage: "Le prénom doit faire plus que {{ limit }} caractères",
        maxMessage: "Le prénom ne peut pas faire plus que {{ limit }} caractères",
        groups: ["register"]
    )]
    private ?string $firstName = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Vous devez renseigner votre nom", groups: ["register"])]
    #[Assert\Length(
        min: 3, 
        max: 20,
        minMessage: "Le nom doit faire plus que {{ limit }} caractères",
        maxMessage: "Le nom ne peut pas faire plus que {{ limit }} caractères",
        groups: ["register"]
    )]
    private ?string $lastName = null;

    private $oldPassword;

    #[Assert\Length(
        min: 8,
        minMessage: "Votre mot de passe doit faire un minimun de 8 caractères"
    )]
    private $newPassword;
    
    # confirmation du password*
    #[Assert\EqualTo(
        propertyPath: "newPassword",
        message: "Les deux mots de passe ne sont pas identiques",
    )]
    private $confirmNewPassword;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     *
     * @return list<string>
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    /**
     * @param list<string> $roles
     */
    public function setRoles(array $roles): static
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): static
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): static
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get the value of oldPassword
     */ 
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * Set the value of oldPassword
     *
     * @return  self
     */ 
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;

        return $this;
    }

    /**
     * Get the value of confirmNewPassword
     */ 
    public function getConfirmNewPassword()
    {
    return $this->confirmNewPassword;
    }

    /**
     * Set the value of confirmNewPassword
     *
     * @return  self
     */ 
    public function setConfirmNewPassword($confirmNewPassword)
    {
    $this->confirmNewPassword = $confirmNewPassword;

    return $this;
    }

    /**
    * Get the value of newPassword
    */ 
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
    * Set the value of newPassword
    *
    * @return  self
    */ 
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
        return $this;
    }
}
