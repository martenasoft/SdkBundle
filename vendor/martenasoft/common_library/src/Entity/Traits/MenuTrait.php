<?php

namespace MartenaSoft\CommonLibrary\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait MenuTrait
{
    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isOnTopMenu = false;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isOnLeftMenu = false;

    #[ORM\Column(type: Types::BOOLEAN, options: ['default' => false])]
    private bool $isOnFooterMenu = false;

    public function isOnTopMenu(): bool
    {
        return $this->isOnTopMenu;
    }

    public function setIsOnTopMenu(bool $isOnTopMenu): self
    {
        $this->isOnTopMenu = $isOnTopMenu;
        return $this;
    }

    public function isOnLeftMenu(): bool
    {
        return $this->isOnLeftMenu;
    }

    public function setIsOnLeftMenu(bool $isOnLeftMenu): self
    {
        $this->isOnLeftMenu = $isOnLeftMenu;
        return $this;
    }

    public function isOnFooterMenu(): bool
    {
        return $this->isOnFooterMenu;
    }

    public function setIsOnFooterMenu(bool $isOnFooterMenu): self
    {
        $this->isOnFooterMenu = $isOnFooterMenu;
        return $this;
    }
}
