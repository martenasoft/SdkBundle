<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class DictionaryPage
{
    public const int PAGE_TYPE = 1;
    public const int SECTION_TYPE = 2;
    public const int CONTROLLER_ROUTE_TYPE = 4;

    public const string PAGE_TYPE_VALUE = 'page';
    public const string SECTION_TYPE_VALUE = 'section';
    public const string CONTROLLER_ROUTE_TYPE_VALUE = 'controller';
    public const array TYPES = [
        self::PAGE_TYPE => self::PAGE_TYPE_VALUE,
        self::SECTION_TYPE => self::SECTION_TYPE_VALUE,
        self::CONTROLLER_ROUTE_TYPE => self::CONTROLLER_ROUTE_TYPE_VALUE,
    ];

    public const string MAIN_PAGE_SLUG = 'main-page';
}
