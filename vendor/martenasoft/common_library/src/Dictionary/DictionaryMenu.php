<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class DictionaryMenu
{
    public const int MENU_TYPE_VERTICAL = 1;
    public const int MENU_TYPE_HORIZONTAL = 2;
    public const int MENU_TYPE_BOTH_VERTICAL_AND_HORIZONTAL = 3;
    public const int MENU_TYPE_NONE = 4;

    public const string MENU_TYPE_VERTICAL_VALUE = 'vertical';
    public const string MENU_TYPE_HORIZONTAL_VALUE = 'horizontal';
    public const string MENU_TYPE_BOTH_VERTICAL_AND_HORIZONTAL_VALUE = 'vertical and horizontal';
    public const string MENU_TYPE_NONE_VALUE = 'no menu';

    public const array MENU_TYPES = [
        self::MENU_TYPE_VERTICAL => self::MENU_TYPE_VERTICAL_VALUE,
        self::MENU_TYPE_HORIZONTAL => self::MENU_TYPE_HORIZONTAL_VALUE,
        self::MENU_TYPE_BOTH_VERTICAL_AND_HORIZONTAL => self::MENU_TYPE_BOTH_VERTICAL_AND_HORIZONTAL_VALUE,
        self::MENU_TYPE_NONE => self::MENU_TYPE_NONE_VALUE,
    ];
}
