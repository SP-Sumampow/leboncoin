<?php

namespace App\Entity;

use App\Repository\AdRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Serializer\Annotation\Groups;

#[ORM\Entity(repositoryClass: AdRepository::class)]
class Ad
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $title;

    #[ORM\Column(type: 'text')]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $description;

    #[ORM\Column(type: 'integer')]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $price;

    #[ORM\Column(type: 'string', length: 255)]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $postalCode;

    #[ORM\Column(type: 'integer', length: 255)]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $status;

    #[Gedmo\Timestampable(on: 'create')]
    #[ORM\Column(name: 'created', type: Types::DATETIME_MUTABLE)]
    #[groups(["show_ad", "list_ad"])]
    private $created;

    #[ORM\Column(name: 'updated', type: Types::DATETIME_MUTABLE)]
    #[Gedmo\Timestampable]
    #[groups(["show_ad", "list_ad"])]
    private $updated;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'sellAds')]
    #[ORM\JoinColumn(nullable: false)]
    #[groups(["show_ad", "list_ad"])]
    private $seller;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'BuyAds')]
    #[groups(["show_ad", "list_ad"])]
    private $buyer;

    #[ORM\OneToOne(targetEntity: Review::class, cascade: ['persist', 'remove'])]
    #[groups(["show_ad", "list_ad"])]
    private $review;

    #[ORM\OneToMany(mappedBy: 'ad', targetEntity: Message::class, orphanRemoval: true)]
    #[groups(["show_ad", "list_ad"])]
    private $messages;

    #[ORM\OneToMany(mappedBy: 'ad', targetEntity: Media::class, orphanRemoval: true)]
    #[groups(["show_ad", "list_ad"])]
    private $medias;

    #[ORM\ManyToMany(targetEntity: Tag::class, inversedBy: 'ads', cascade: ['persist'])]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $tags;

    #[ORM\Column(type: 'string', length: 255)]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $currency;

    #[ORM\Column(type: 'string', length: 6)]
    #[groups(["show_ad", "list_ad", "created_ad"])]
    private $validationCode;

    public function __construct()
    {
        $this->messages = new ArrayCollection();
        $this->medias = new ArrayCollection();
        $this->tags = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getCreated(): \DateTime
    {
        return $this->created;
    }

    public function getUpdated(): \DateTime
    {
        return $this->updated;
    }

    public function getSeller(): ?User
    {
        return $this->seller;
    }

    public function setSeller(?User $seller): self
    {
        $this->seller = $seller;

        return $this;
    }

    public function getBuyer(): ?User
    {
        return $this->buyer;
    }

    public function setBuyer(?User $buyer): self
    {
        $this->buyer = $buyer;

        return $this;
    }

    public function getReview(): ?Review
    {
        return $this->review;
    }

    public function setReview(?Review $review): self
    {
        $this->review = $review;

        return $this;
    }

    /**
     * @return Collection|Message[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(Message $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setAd($this);
        }

        return $this;
    }

    public function removeMessage(Message $message): self
    {
        if ($this->messages->removeElement($message)) {
            // set the owning side to null (unless already changed)
            if ($message->getAd() === $this) {
                $message->setAd(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Media[]
     */
    public function getMedias(): Collection
    {
        return $this->medias;
    }

    public function addMedia(Media $media): self
    {
        if (!$this->medias->contains($media)) {
            $this->medias[] = $media;
            $media->setAd($this);
        }

        return $this;
    }

    public function removeMedia(Media $media): self
    {
        if ($this->medias->removeElement($media)) {
            // set the owning side to null (unless already changed)
            if ($media->getAd() === $this) {
                $media->setAd(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Tag[]
     */
    public function getTags(): Collection
    {
        return $this->tags;
    }

    public function addTag(Tag $tag): self
    {
        if (!$this->tags->contains($tag)) {
            $this->tags[] = $tag;
        }

        return $this;
    }

    public function removeTag(Tag $tag): self
    {
        $this->tags->removeElement($tag);

        return $this;
    }

    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }


    public function getValidationCode(): ?string
    {
        return $this->validationCode;
    }

    public function setValidationCode(string $validationCode): self
    {
        $this->validationCode = $validationCode;

        return $this;
    }

}
