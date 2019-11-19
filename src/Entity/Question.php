<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Survey", inversedBy="Question")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Survey;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Type")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSurvey(): ?Survey
    {
        return $this->Survey;
    }

    public function setSurvey(?Survey $Survey): self
    {
        $this->Survey = $Survey;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getType(): ?Type
    {
        return $this->Type;
    }

    public function setType(?Type $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
