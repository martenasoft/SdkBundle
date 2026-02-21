<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait MysqlIdTrait
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "IDENTITY")] // Используем AUTO_INCREMENT для MySQL
    #[ORM\Column(type: "integer")]
    protected ?int $id = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}
