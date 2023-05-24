<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToMany(targetEntity: Category::class)]
    private Collection $category;

    #[ORM\Column(length: 255)]
    private ?string $titre = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 255)]
    private ?string $Auteur = null;

    #[ORM\Column(length: 255)]
    private ?string $Contenue = null;

    #[ORM\Column(length: 255)]
    private ?string $phraseAcroche = null;

    #[ORM\Column(length: 255)]
    private ?string $images = null;

    #[ORM\Column]
    private array $tag = [];

    #[ORM\Column(length: 255)]
    private ?string $titreImages = null;

    public function __construct()
    {
        $this->category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Category>
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->category->contains($category)) {
            $this->category->add($category);
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->category->removeElement($category);

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(string $titre): self
    {
        $this->titre = $titre;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getAuteur(): ?string
    {
        return $this->Auteur;
    }

    public function setAuteur(string $Auteur): self
    {
        $this->Auteur = $Auteur;

        return $this;
    }

    public function getContenue(): ?string
    {
        return $this->Contenue;
    }

    public function setContenue(string $Contenue): self
    {
        $this->Contenue = $Contenue;

        return $this;
    }

    public function getPhraseAcroche(): ?string
    {
        return $this->phraseAcroche;
    }

    public function setPhraseAcroche(string $phraseAcroche): self
    {
        $this->phraseAcroche = $phraseAcroche;

        return $this;
    }

    public function getImages(): ?string
    {
        return $this->images;
    }

    public function setImages(string $images): self
    {
        $this->images = $images;

        return $this;
    }

    public function getTag(): array
    {
        return $this->tag;
        
    }

    public function setTag(array $tag): self
    {
        $this->tag = $tag;

        return $this;
        
    }

    public function getTitreImages(): ?string
    {
        return $this->titreImages;
    }

    public function setTitreImages(string $titreImages): self
    {
        $this->titreImages = $titreImages;

        return $this;
    }
}
