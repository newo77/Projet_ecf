<?php

namespace App\Entity;

use App\Repository\HeaderRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HeaderRepository::class)]
class Header
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'text')]
    private $titre;

    #[ORM\Column(type: 'string', length: 255)]
    private $button;

    #[ORM\Column(type: 'string', length: 255)]
    private $btnUrl;

    #[ORM\Column(type: 'string', length: 255)]
    private $Illustration;

    #[ORM\Column(type: 'text')]
    private $Contenu;



    public function getId(): ?int
    {
        return $this->id;
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

    public function getButton(): ?string
    {
        return $this->button;
    }

    public function setButton(string $button): self
    {
        $this->button = $button;

        return $this;
    }

    public function getBtnUrl(): ?string
    {
        return $this->btnUrl;
    }

    public function setBtnUrl(string $btnUrl): self
    {
        $this->btnUrl = $btnUrl;

        return $this;
    }

    public function getIllustration(): ?string
    {
        return $this->Illustration;
    }

    public function setIllustration(string $Illustration): self
    {
        $this->Illustration = $Illustration;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }




}
