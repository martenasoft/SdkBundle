<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

trait ImageTrait
{
    #[ORM\Column(length: 255, nullable: true)]
    #[Assert\NotBlank]
    private ?string $image = null;

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(string $image): static
    {
        $this->image = $image;

        return $this;
    }
}
