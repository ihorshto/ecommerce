<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;
use Cocur\Slugify\Slugify;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[UniqueEntity(fields: "name", message: "Ce nom est déja utilisé")]
#[ORM\HasLifecycleCallbacks()]
class Product
{

    /**
    * permet d'initialiser le slug ( on indique à doctrine que cette fonction doit être appelée lors de la mise à jour ou de la création)
    * @ORM\PrePersist
    * @ORM\PreUpdate
    */
    public function initializeSlug()
    {
        // au moment de la création ou de la mise à jour
        $slugify = new Slugify();
        $this->slug = $slugify->slugify($this->name);
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255, unique: true)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Veuillez enregistrer une image svp")]
    #[Assert\Regex(pattern: "#\.(jpg|png|gif)$#", match: true, message: "Url doit se terminer par .jpg ou .png ou .gif")]
    private ?string $illustration = null;

    #[ORM\Column(length: 255)]
    private ?string $subtitle = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column]
    private ?float $price = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $category = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function setSlug(?string $slug): static
{
    $this->slug = $slug;

    return $this;
}

     #[Gedmo\Slug(fields: 'title')]
    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function getIllustration(): ?string
    {
        return $this->illustration;
    }

    public function setIllustration(string $illustration): static
    {
        $this->illustration = $illustration;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): static
    {
        $this->price = $price;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): static
    {
        $this->category = $category;

        return $this;
    }
}
