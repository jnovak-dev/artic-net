<?php

namespace App\Entity;

use App\Repository\OrganizationRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=OrganizationRepository::class)
 */
class Organization
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
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="organizations")
     */
    private $access;

    /**
     * @ORM\OneToMany(targetEntity=Article::class, mappedBy="publishedBy", orphanRemoval=true)
     */
    private $articles;

    /**
     * @ORM\OneToMany(targetEntity=Recruitment::class, mappedBy="author", orphanRemoval=true)
     */
    private $recruitments;

    /**
     * @ORM\OneToMany(targetEntity=EmailAddress::class, mappedBy="organization", orphanRemoval=true)
     */
    private $eemailAddresses;

    public function __toString(): string
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->access = new ArrayCollection();
        $this->articles = new ArrayCollection();
        $this->recruitments = new ArrayCollection();
        $this->eemailAddresses = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getAccess(): Collection
    {
        return $this->access;
    }

    public function addAccess(User $access): self
    {
        if (!$this->access->contains($access)) {
            $this->access[] = $access;
        }

        return $this;
    }

    public function removeAccess(User $access): self
    {
        $this->access->removeElement($access);

        return $this;
    }

    /**
     * @return Collection|Article[]
     */
    public function getArticles(): Collection
    {
        return $this->articles;
    }

    public function addArticle(Article $article): self
    {
        if (!$this->articles->contains($article)) {
            $this->articles[] = $article;
            $article->setPublishedBy($this);
        }

        return $this;
    }

    public function removeArticle(Article $article): self
    {
        if ($this->articles->removeElement($article)) {
            // set the owning side to null (unless already changed)
            if ($article->getPublishedBy() === $this) {
                $article->setPublishedBy(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Recruitment[]
     */
    public function getRecruitments(): Collection
    {
        return $this->recruitments;
    }

    public function addRecruitment(Recruitment $recruitment): self
    {
        if (!$this->recruitments->contains($recruitment)) {
            $this->recruitments[] = $recruitment;
            $recruitment->setAuthor($this);
        }

        return $this;
    }

    public function removeRecruitment(Recruitment $recruitment): self
    {
        if ($this->recruitments->removeElement($recruitment)) {
            // set the owning side to null (unless already changed)
            if ($recruitment->getAuthor() === $this) {
                $recruitment->setAuthor(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|EmailAddress[]
     */
    public function getEemailAddresses(): Collection
    {
        return $this->eemailAddresses;
    }

    public function addEemailAddress(EmailAddress $eemailAddress): self
    {
        if (!$this->eemailAddresses->contains($eemailAddress)) {
            $this->eemailAddresses[] = $eemailAddress;
            $eemailAddress->setOrganization($this);
        }

        return $this;
    }

    public function removeEemailAddress(EmailAddress $eemailAddress): self
    {
        if ($this->eemailAddresses->removeElement($eemailAddress)) {
            // set the owning side to null (unless already changed)
            if ($eemailAddress->getOrganization() === $this) {
                $eemailAddress->setOrganization(null);
            }
        }

        return $this;
    }
}
