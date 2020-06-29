<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CompetencesRepository")
 */
class Competences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $backend;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $frontend;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $outils;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $SGBD;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBackend(): ?string
    {
        return $this->backend;
    }

    public function setBackend(string $backend): self
    {
        $this->backend = $backend;

        return $this;
    }

    public function getFrontend(): ?string
    {
        return $this->frontend;
    }

    public function setFrontend(string $frontend): self
    {
        $this->frontend = $frontend;

        return $this;
    }

    public function getOutils(): ?string
    {
        return $this->outils;
    }

    public function setOutils(string $outils): self
    {
        $this->outils = $outils;

        return $this;
    }

    public function getSGBD(): ?string
    {
        return $this->SGBD;
    }

    public function setSGBD(string $SGBD): self
    {
        $this->SGBD = $SGBD;

        return $this;
    }
}
