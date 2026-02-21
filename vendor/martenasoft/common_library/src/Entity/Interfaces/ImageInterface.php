<?php

namespace MartenaSoft\CommonLibrary\Entity\Interfaces;

interface ImageInterface
{
    public function getImage(): ?string;

    public function setImage(string $image): static;
}
