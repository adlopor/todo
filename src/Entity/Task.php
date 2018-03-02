<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Task
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDone()
    {
        return $this->isDone;
    }

    /**
     * @param bool $isDone
     * @return Task
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAT()
    {
        return $this->createdAT;
    }

    /**
     * @param \DateTime $createdAT
     * @return Task
     */
    public function setCreatedAT($createdAT)
    {
        $this->createdAT = $createdAT;
        return $this;
    }
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields
    /**
     * @var string
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */

    private $description;

    /**
     * @var bool
     * @ORM\Column(type="boolean")
     */
    private $isDone;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime")
     */
    private $createdAT;

    public function __construct()
    {
        $this->description = "";
        $this->isDone = false;
        $this->createdAT = new \DateTime();
    }
}
