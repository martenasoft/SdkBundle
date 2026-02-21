<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PublicAtTrait
{
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $publicAt = null;

    public function getPublicAt(): ?\DateTimeImmutable
    {
        return $this->publicAt;
    }

    public function setPublicAt(?\DateTimeImmutable $publicAt): static
    {
        $this->publicAt = $publicAt;

        return $this;
    }
}
