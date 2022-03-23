<?php

namespace App\Entity;

use App\Repository\WordRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: WordRepository::class)]
#[ORM\Table(name: "words")]
class Word
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 200)]
    private string $ru;

    #[ORM\Column(type: 'string', length: 200)]
    private string $eng;

    #[ORM\OneToOne(targetEntity: Image::class, cascade: ['persist', 'remove'])]
    private ?Image $preview;

    #[ORM\ManyToOne(targetEntity: Dictionary::class, inversedBy: 'words')]
    #[ORM\JoinColumn(nullable: false)]
    private Dictionary $dictionary;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRu(): ?string
    {
        return $this->ru;
    }

    public function setRu(string $ru): self
    {
        $this->ru = $ru;

        return $this;
    }

    public function getEng(): ?string
    {
        return $this->eng;
    }

    public function setEng(string $eng): self
    {
        $this->eng = $eng;

        return $this;
    }

    public function getPreview(): ?Image
    {
        return $this->preview;
    }

    public function setPreview(?Image $preview): self
    {
        $this->preview = $preview;

        return $this;
    }

    public function getDictionary(): ?Dictionary
    {
        return $this->dictionary;
    }

    public function setDictionary(?Dictionary $dictionary): self
    {
        $this->dictionary = $dictionary;

        return $this;
    }
}
