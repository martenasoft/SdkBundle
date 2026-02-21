<?php

namespace MartenaSoft\SdkBundle\Service;

use MartenaSoft\CommonLibrary\Dto\ActiveSiteDto;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ImageConfigServiceSdk
{
    public function __construct(
        private ParameterBagInterface $parameterBag
    ) {
    }

    public function get(?ActiveSiteDto $activeSiteDto, ?string $type = null): array
    {
        $configItems = $this->parameterBag->get('image') ?? [];
        $config = $defaultConfig = [];

        foreach ($configItems as $configItem) {
            if (!isset($configItem['site'])) {
                continue;
            }

            if (!isset($configItem['site']['id'])) {
                continue;
            }

            if ($configItem['site']['id'] === 9999) {
                $defaultConfig = $configItem;
            }

            if ($configItem['site']['id'] === $activeSiteDto->id) {
                $config = $configItem;
            }
        }

        if (empty($config)) {
            $config = $defaultConfig;
        }

        if (isset($config['site']['types'])) {
            if ($type !== null && isset($config['site']['types'][$type])) {
                return $config['site']['types'][$type];
            }
            return $config['site']['types'];
        }
        return [];
    }
}
