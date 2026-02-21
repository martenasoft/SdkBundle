<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

final class DictionaryCommonStatus
{
    public const string NEW_TEXT = "mew";
    public const string ACTIVE_TEXT = "active";
    public const int NEW_VALUE = 1;
    public const int ACTIVE_VALUE = 1;

    public const array STATUSES = [
        self::NEW_VALUE => self::NEW_TEXT,
        self::ACTIVE_VALUE => self::ACTIVE_TEXT,
    ];
}
