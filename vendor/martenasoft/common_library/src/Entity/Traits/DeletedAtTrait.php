<?php

// src/Common/Entity/Field/DeletedAtTrait.php
namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait DeletedAtTrait
{
    #[ORM\Column(type: "datetime", nullable: true)]
    private ?\DateTimeInterface $deletedAt = null;

    public function getDeletedAt(): ?\DateTimeInterface
    {
        return $this->deletedAt;
    }

    public function setDeletedAt(?\DateTimeInterface $deletedAt): self
    {
        $this->deletedAt = $deletedAt;
        return $this;
    }
}

