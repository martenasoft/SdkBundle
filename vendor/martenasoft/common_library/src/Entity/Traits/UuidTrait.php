<?php

// src/Common/Entity/Field/UuidTrait.php
namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use MartenaSoft\CommonLibrary\Helper\StringHelper;
use Symfony\Component\Uid\Uuid;

trait UuidTrait
{
    #[ORM\Column(type: "uuid")]
    private Uuid|null $uuid = null;

    public function getUuid(): ?Uuid
    {
        return $this->uuid;
    }

    public function setUuid(?Uuid $uuid): self
    {
        $this->uuid = $uuid;
        return $this;
    }

    #[ORM\PrePersist]
    public function initializeUuid(): void
    {
        if ($this->uuid === null) {
            $this->uuid = StringHelper::getRandomUuid();
        }
    }
}
