<?php

namespace MartenaSoft\SdkBundle\Service\Api;


use MartenaSoft\SdkBundle\Service\Interfaces\PageSdkInterface;

class PageSdk implements PageSdkInterface
{
    public function getCount(array $filter = []): int
    {
        //TODO create getting data by http client
        return 111;
    }
}
