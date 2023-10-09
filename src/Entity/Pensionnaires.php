<?php

namespace App\Entity;

use App\Repository\PensionnairesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PensionnairesRepository::class)]
class Pensionnaires
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name:'id_pensionnaire')]
    private ?int $id = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $nom_pensionnaire = null;

    #[ORM\Column(length: 50, nullable: true)]
    private ?string $type_pensionnaire = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_de_naissance_pensionnaire = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $image_pensionnaire = null;

    #[ORM\OneToMany(mappedBy: 'pensionnaire', targetEntity: InformationsPensionnaires::class)]
    private Collection $informationPensionnaire;

    public function __construct()
    {
        $this->informationPensionnaire = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPensionnaire(): ?string
    {
        return $this->nom_pensionnaire;
    }

    public function setNomPensionnaire(?string $nom_pensionnaire): static
    {
        $this->nom_pensionnaire = $nom_pensionnaire;

        return $this;
    }

    public function getTypePensionnaire(): ?string
    {
        return $this->type_pensionnaire;
    }

    public function setTypePensionnaire(?string $type_pensionnaire): static
    {
        $this->type_pensionnaire = $type_pensionnaire;

        return $this;
    }

    public function getDateDeNaissancePensionnaire(): ?\DateTimeInterface
    {
        return $this->date_de_naissance_pensionnaire;
    }

    public function setDateDeNaissancePensionnaire(?\DateTimeInterface $date_de_naissance_pensionnaire): static
    {
        $this->date_de_naissance_pensionnaire = $date_de_naissance_pensionnaire;

        return $this;
    }

    public function getImagePensionnaire(): ?string
    {
        return $this->image_pensionnaire;
    }

    public function setImagePensionnaire(?string $image_pensionnaire): static
    {
        $this->image_pensionnaire = $image_pensionnaire;

        return $this;
    }

    /**
     * @return Collection<int, InformationsPensionnaires>
     */
    public function getInformationPensionnaire(): Collection
    {
        return $this->informationPensionnaire;
    }

    public function addInformationPensionnaire(InformationsPensionnaires $informationPensionnaire): static
    {
        if (!$this->informationPensionnaire->contains($informationPensionnaire)) {
            $this->informationPensionnaire->add($informationPensionnaire);
            $informationPensionnaire->setPensionnaire($this);
        }

        return $this;
    }

    public function removeInformationPensionnaire(InformationsPensionnaires $informationPensionnaire): static
    {
        if ($this->informationPensionnaire->removeElement($informationPensionnaire)) {
            // set the owning side to null (unless already changed)
            if ($informationPensionnaire->getPensionnaire() === $this) {
                $informationPensionnaire->setPensionnaire(null);
            }
        }

        return $this;
    }
}
