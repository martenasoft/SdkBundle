<?php

// src/Common/Entity/Field/StatusTrait.php
namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait StatusTrait
{
    #[ORM\Column(type: "smallint", options: ["default" => 0])]
    private int $status = 0;

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;
        return $this;
    }
}

