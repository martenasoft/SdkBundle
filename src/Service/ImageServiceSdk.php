<?php

namespace MartenaSoft\SdkBundle\Service;

use MartenaSoft\ImageBundle\Repository\ImageRepository;
use MartenaSoft\SiteBundle\Dto\ActiveSiteDto;

readonly class ImageServiceSdk
{
    public function __construct(
        private ImageRepository $imageRepository,
    ) {

    }
    public function getImages(string $type, string $uuid, ActiveSiteDto $activeSiteDto): array
    {
        return $this
            ->imageRepository
            ->getQueryBuilder(
                type: $type,
                activeSiteId: $activeSiteDto->id,
                parentUuid: $uuid,
            )
            ->getQuery()
            ->getResult()
            ;

    }
}
