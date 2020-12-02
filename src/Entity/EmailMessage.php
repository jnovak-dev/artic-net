<?php

namespace App\Entity;

use App\Repository\EmailMessageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmailMessageRepository::class)
 */
class EmailMessage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=EmailAddress::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $sender;

    /**
     * @ORM\ManyToMany(targetEntity=EmailAddress::class)
     */
    private $recipient;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $subject;

    /**
     * @ORM\Column(type="text")
     */
    private $text;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateSent;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDeletedBySender;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isDeletedByRecipient;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $dateSeen;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isSeen;

    public function __construct()
    {
        $this->dateSent = new \DateTime();
        $this->recipient = new ArrayCollection();

        $this->isDeletedBySender = false;
        $this->isDeletedByRecipient = false;
        $this->isSeen = false;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?EmailAddress
    {
        return $this->sender;
    }

    public function setSender(?EmailAddress $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * @return Collection|EmailAddress[]
     */
    public function getRecipient(): Collection
    {
        return $this->recipient;
    }

    public function addRecipient(EmailAddress $recipient): self
    {
        if (!$this->recipient->contains($recipient)) {
            $this->recipient[] = $recipient;
        }

        return $this;
    }

    public function removeRecipient(EmailAddress $recipient): self
    {
        $this->recipient->removeElement($recipient);

        return $this;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(string $subject): self
    {
        $this->subject = $subject;

        return $this;
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

    public function getDateSent(): ?\DateTimeInterface
    {
        return $this->dateSent;
    }

    public function setDateSent(?\DateTimeInterface $dateSent): self
    {
        $this->dateSent = $dateSent;

        return $this;
    }

    public function getIsDeletedBySender(): ?bool
    {
        return $this->isDeletedBySender;
    }

    public function setIsDeletedBySender(bool $isDeletedBySender): self
    {
        $this->isDeletedBySender = $isDeletedBySender;

        return $this;
    }

    public function getIsDeletedByRecipient(): ?bool
    {
        return $this->isDeletedByRecipient;
    }

    public function setIsDeletedByRecipient(bool $isDeletedByRecipient): self
    {
        $this->isDeletedByRecipient = $isDeletedByRecipient;

        return $this;
    }

    public function getDateSeen(): ?\DateTimeInterface
    {
        return $this->dateSeen;
    }

    public function setDateSeen(\DateTimeInterface $dateSeen): self
    {
        $this->dateSeen = $dateSeen;

        return $this;
    }

    public function getIsSeen(): ?bool
    {
        return $this->isSeen;
    }

    public function setIsSeen(bool $isSeen): self
    {
        $this->isSeen = $isSeen;

        return $this;
    }
}
