<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Gedmo\Mapping\Annotation as Gedmo;
use Doctrine\DBAL\Types\Types;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\Ignore;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    #[groups(["show_ad", "list_ad"])]
    private $id;

    #[ORM\Column(type: 'string', length: 180, unique: true)]
    #[groups(["show_ad", "list_ad"])]
    private $email;

    #[ORM\Column(type: 'json')]
    #[Ignore()]
    private $roles = [];

    #[ORM\Column(type: 'string')]
    #[Ignore()]
    private $password;

    #[Gedmo\Timestampable(on: 'create')]
    #[ORM\Column(name: 'created', type: Types::DATETIME_MUTABLE)]
    private $created;

    #[ORM\Column(name: 'updated', type: Types::DATETIME_MUTABLE)]
    #[Gedmo\Timestampable]
    private $updated;

    #[ORM\OneToMany(mappedBy: 'seller', targetEntity: Ad::class, orphanRemoval: true)]
    #[groups(["show_user"])]
    private $sellAds;

    #[ORM\OneToMany(mappedBy: 'buyer', targetEntity: Ad::class)]
    #[groups(["show_user"])]
    private $BuyAds;

    public function __construct()
    {
        $this->ads = new ArrayCollection();
        $this->sellAds = new ArrayCollection();
        $this->BuyAds = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

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

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string)$this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection|Ad[]
     */
    public function getSellAds(): Collection
    {
        return $this->sellAds;
    }

    public function addSellAd(Ad $sellAd): self
    {
        if (!$this->sellAds->contains($sellAd)) {
            $this->sellAds[] = $sellAd;
            $sellAd->setSeller($this);
        }

        return $this;
    }

    public function removeSellAd(Ad $sellAd): self
    {
        if ($this->sellAds->removeElement($sellAd)) {
            // set the owning side to null (unless already changed)
            if ($sellAd->getSeller() === $this) {
                $sellAd->setSeller(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Ad[]
     */
    public function getBuyAds(): Collection
    {
        return $this->BuyAds;
    }

    public function addBuyAd(Ad $buyAd): self
    {
        if (!$this->BuyAds->contains($buyAd)) {
            $this->BuyAds[] = $buyAd;
            $buyAd->setBuyer($this);
        }

        return $this;
    }

    public function removeBuyAd(Ad $buyAd): self
    {
        if ($this->BuyAds->removeElement($buyAd)) {
            // set the owning side to null (unless already changed)
            if ($buyAd->getBuyer() === $this) {
                $buyAd->setBuyer(null);
            }
        }

        return $this;
    }
}
