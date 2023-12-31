<?php

namespace App\Entity;

use App\Repository\EtudiantRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EtudiantRepository::class)]
class Etudiant
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Naissance = null;

    #[ORM\Column]
    private ?int $Sexe = null;

    #[ORM\ManyToOne(inversedBy: 'etudiants')]
    private ?Etablissement $codeEtablissement = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNaissance(): ?\DateTimeInterface
    {
        return $this->Naissance;
    }

    public function setNaissance(\DateTimeInterface $Naissance): static
    {
        $this->Naissance = $Naissance;

        return $this;
    }

    public function getSexe(): ?int
    {
        return $this->Sexe;
    }

    public function setSexe(int $Sexe): static
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getCodeEtablissement(): ?Etablissement
    {
        return $this->codeEtablissement;
    }

    public function setCodeEtablissement(?Etablissement $codeEtablissement): static
    {
        $this->codeEtablissement = $codeEtablissement;

        return $this;
    }
}
