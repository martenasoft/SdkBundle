<?php

namespace MartenaSoft\CommonLibrary\Entity\Interfaces;

use MartenaSoft\UserBundle\Entity\User;

interface AuthorInterface
{
    public function getAuthor(): ?string;

    public function setAuthor(?string $author): self;
}
