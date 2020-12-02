<?php

namespace App\Entity;

use App\Repository\EmailAddressRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmailAddressRepository::class)
 */
class EmailAddress
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
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="emailAddresses")
     */
    private $access;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateCreated;

    /**
     * @ORM\ManyToOne(targetEntity=Organization::class, inversedBy="eemailAddresses")
     * @ORM\JoinColumn(nullable=false)
     */
    private $organization;

    public function __toString(): string
    {
        return $this->name;
    }

    public function __construct()
    {
        $this->access = new ArrayCollection();
        $this->dateCreated = new \DateTime();
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

    public function getDateCreated(): ?\DateTimeInterface
    {
        return $this->dateCreated;
    }

    public function setDateCreated(\DateTimeInterface $dateCreated): self
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    public function getOrganization(): ?Organization
    {
        return $this->organization;
    }

    public function setOrganization(?Organization $organization): self
    {
        $this->organization = $organization;

        return $this;
    }
}
