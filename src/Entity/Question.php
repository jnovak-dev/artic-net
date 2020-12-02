<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $text;

    /**
     * @ORM\ManyToOne(targetEntity=Recruitment::class, inversedBy="questions")
     * @ORM\JoinColumn(nullable=true)
     */
    private $recruitment;

    /**
     * @ORM\ManyToOne(targetEntity=Organization::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    public function __toString(): string
    {
        return $this->text;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getText(): ?string
    {
        return $this->text;
    }

    public function setText(string $text): self
    {
        $this->text = $text;

        return $this;
    }

    public function getRecruitment(): ?Recruitment
    {
        return $this->recruitment;
    }

    public function setRecruitment(?Recruitment $recruitment): self
    {
        $this->recruitment = $recruitment;

        return $this;
    }

    public function getAuthor(): ?Organization
    {
        return $this->author;
    }

    public function setAuthor(?Organization $author): self
    {
        $this->author = $author;

        return $this;
    }
}
