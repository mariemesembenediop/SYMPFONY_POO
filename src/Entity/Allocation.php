<?php

namespace App\Entity;

use App\Repository\AllocationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AllocationRepository::class)
 */
class Allocation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $id_alloc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @ORM\Column(type="float")
     */
    private $numerochambre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typechambre;

    /**
     * @ORM\Column(type="float")
     */
    private $numerobatiment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdAlloc(): ?float
    {
        return $this->id_alloc;
    }

    public function setIdAlloc(float $id_alloc): self
    {
        $this->id_alloc = $id_alloc;

        return $this;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getNumerochambre(): ?float
    {
        return $this->numerochambre;
    }

    public function setNumerochambre(float $numerochambre): self
    {
        $this->numerochambre = $numerochambre;

        return $this;
    }

    public function getTypechambre(): ?string
    {
        return $this->typechambre;
    }

    public function setTypechambre(string $typechambre): self
    {
        $this->typechambre = $typechambre;

        return $this;
    }

    public function getNumerobatiment(): ?float
    {
        return $this->numerobatiment;
    }

    public function setNumerobatiment(float $numerobatiment): self
    {
        $this->numerobatiment = $numerobatiment;

        return $this;
    }
}
