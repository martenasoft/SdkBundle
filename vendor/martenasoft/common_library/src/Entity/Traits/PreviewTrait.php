<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PreviewTrait
{
    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $preview = null;
    public function getPreview(): ?string
    {
        return $this->preview;
    }

    public function setPreview(?string $preview): static
    {
        $this->preview = $preview;

        return $this;
    }
}
