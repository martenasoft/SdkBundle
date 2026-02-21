<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PositionTrait
{
    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private ?int $position = null;

    public function getPosition(): ?int
    {
        return $this->position;
    }

    public function setPosition(int $position): static
    {
        $this->position = $position;

        return $this;
    }
}
