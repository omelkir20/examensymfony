<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[ORM\Column(length: 180, unique: true)]
    private ?string $nom = null;
    #[ORM\Column(length: 180, unique: true)]
    private ?string $description = null;
    #[ORM\Column(length: 180, unique: true)]
    private ?float $prix = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }
    public function getDes(): ?string
    {
        return $this->description;
    }
    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
    public function setDes(string $description): self
    {
        $this->description = $description;
        return $this;
    }
    public function setPrix(float $prix): self
    {
        $this->prix = $prix;
        return $this;
    }
}
