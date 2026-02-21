<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Uid\Uuid;

trait ParentUuidTrait
{
    #[ORM\Column(type: "uuid")]
    private Uuid|null $parentUuid = null;

    public function getParentUuid(): ?Uuid
    {
        return $this->parentUuid;
    }

    public function setParentUuid(Uuid|string $parentUuid): self
    {
        if (is_string($parentUuid)) {
            $parentUuid = new Uuid($parentUuid);
        }

        $this->parentUuid = $parentUuid;
        return $this;
    }
}
