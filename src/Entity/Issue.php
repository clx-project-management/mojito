<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\IssueRepository")
 */
class Issue
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\user", inversedBy="issues")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Author;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\user", inversedBy="issuesModified")
     */
    private $ModifiedBy;

    public function __construct()
    {
        $this->ModifiedBy = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAuthor(): ?user
    {
        return $this->Author;
    }

    public function setAuthor(?user $Author): self
    {
        $this->Author = $Author;

        return $this;
    }

    /**
     * @return Collection|user[]
     */
    public function getModifiedBy(): Collection
    {
        return $this->ModifiedBy;
    }

    public function addModifiedBy(user $modifiedBy): self
    {
        if (!$this->ModifiedBy->contains($modifiedBy)) {
            $this->ModifiedBy[] = $modifiedBy;
        }

        return $this;
    }

    public function removeModifiedBy(user $modifiedBy): self
    {
        if ($this->ModifiedBy->contains($modifiedBy)) {
            $this->ModifiedBy->removeElement($modifiedBy);
        }

        return $this;
    }
}
