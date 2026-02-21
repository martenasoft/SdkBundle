<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class ImageDictionary
{
    public const string TYPE_PAGE = 'page';
    public const int TYPE_PAGE_INDEX = 1;
    public const string TYPE_USER = 'user';
    public const int TYPE_USER_INDEX = 2;
    public const array TYPES = [
        self::TYPE_PAGE_INDEX => self::TYPE_PAGE,
        self::TYPE_USER_INDEX => self::TYPE_USER,
    ];

    public static function getTypeIndexes(): array
    {
        return array_keys(self::TYPES);
    }

    public static function getTypeIndex(string $type): int
    {
        $types = array_flip(self::TYPES);
        if (!isset($types[$type])) {
            throw new \Exception("Type '$type' not found");
        }

        return $types[$type];
    }
}
