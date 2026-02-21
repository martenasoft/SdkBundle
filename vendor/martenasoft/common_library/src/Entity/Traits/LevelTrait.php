<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LevelTrait
{
    #[ORM\Column(type: Types::INTEGER, nullable: true)]
    private int $level = 0;

    public function getLevel(): ?int
    {
        return $this->level;
    }

    public function setLevel(int $level): static
    {
        $this->level = $level;

        return $this;
    }
}
