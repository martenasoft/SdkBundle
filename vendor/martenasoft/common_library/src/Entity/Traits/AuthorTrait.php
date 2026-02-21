<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait AuthorTrait
{
    #[ORM\Column(type: "uuid")]
    private string|null $author = null;

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(?string $author): self
    {
        $this->author = $author;
        return $this;
    }
}
