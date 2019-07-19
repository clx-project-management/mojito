<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @UniqueEntity(fields={"username"}, message="There is already an account with this username")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Issue", mappedBy="Author")
     */
    private $issues;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Issue", mappedBy="ModifiedBy")
     */
    private $issuesModified;


    public function __construct()
    {
        $this->CreatedAt = new ArrayCollection();
        $this->issues = new ArrayCollection();
        $this->issuesModified = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        //$roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
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
     * @return Collection|Issue[]
     */
    public function getIssues(): Collection
    {
        return $this->issues;
    }

    public function addIssue(Issue $issue): self
    {
        if (!$this->issues->contains($issue)) {
            $this->issues[] = $issue;
            $issue->setAuthor($this);
        }

        return $this;
    }

    public function removeIssue(Issue $issue): self
    {
        if ($this->issues->contains($issue)) {
            $this->issues->removeElement($issue);
            // set the owning side to null (unless already changed)
            if ($issue->getAuthor() === $this) {
                $issue->setAuthor(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Issue[]
     */
    public function getIssuesModified(): Collection
    {
        return $this->issuesModified;
    }

    public function addIssuesModified(Issue $issuesModified): self
    {
        if (!$this->issuesModified->contains($issuesModified)) {
            $this->issuesModified[] = $issuesModified;
            $issuesModified->addModifiedBy($this);
        }

        return $this;
    }

    public function removeIssuesModified(Issue $issuesModified): self
    {
        if ($this->issuesModified->contains($issuesModified)) {
            $this->issuesModified->removeElement($issuesModified);
            $issuesModified->removeModifiedBy($this);
        }

        return $this;
    }

    public function __toString()
    {
        return $this->username;
    }
}
