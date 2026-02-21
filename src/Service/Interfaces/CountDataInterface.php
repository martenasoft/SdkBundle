<?php

namespace MartenaSoft\SdkBundle\Service\Interfaces;

interface CountDataInterface
{
    public function getCount(array $filter = []): int;
}