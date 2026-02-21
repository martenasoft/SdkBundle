<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

trait IdTrait
{
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
