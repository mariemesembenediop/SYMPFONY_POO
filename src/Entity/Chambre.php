<?php

namespace App\Entity;

use App\Repository\ChambreRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChambreRepository::class)
 */
class Chambre
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
