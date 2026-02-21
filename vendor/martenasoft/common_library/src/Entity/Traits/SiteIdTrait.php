<?php

// src/Common/Entity/Field/SiteIdTrait.php
namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;

trait SiteIdTrait
{
    #[ORM\Column(type: "integer", nullable: true, options: ["unsigned" => true])]
    private ?int $siteId = null;

    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    public function setSiteId(?int $siteId): self
    {
        $this->siteId = $siteId;
        return $this;
    }
}

