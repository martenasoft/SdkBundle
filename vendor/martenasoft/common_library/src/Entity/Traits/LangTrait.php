<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait LangTrait
{
    #[ORM\Column(length: 6, nullable: true)]
    private ?string $lang = null;

    public function getLang(): ?string
    {
        return $this->lang;
    }

    public function setLang(?string $lang): static
    {
        $this->lang = $lang;

        return $this;
    }
}
