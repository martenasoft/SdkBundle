<?php

namespace MartenaSoft\CommonLibrary\Dictionary;

class DictionaryUser
{
    public const string USER_ROLE = 'ROLE_USER';
    public const string ADMIN_ROLE = 'ROLE_ADMIN';

    public const string ROUTE_ACCESS = 'ROUTE_ACCESS';

    public const array ROLES = [
        self::USER_ROLE
    ];

    public const string REDIRECT_TO_AFTER_LOGIN = 'app_page_main';

    public const int STATUS_ACTIVE = 1;
    public const int STATUS_BLOCKED = 2;
    public const int STATUS_DELETED = 3;
    public const int STATUS_NEW = 4;

    public const string STATUS_ACTIVE_TEXT = 'Active';
    public const string STATUS_BLOCKED_TEXT = 'Blocked';
    public const string STATUS_DELETED_TEXT = 'Deleted';
    public const string STATUS_NEW_TEXT = 'New';

    public const array CHOICE_STATUSES = [
        self::STATUS_ACTIVE_TEXT => self::STATUS_ACTIVE,
        self::STATUS_BLOCKED_TEXT => self::STATUS_BLOCKED,
        self::STATUS_DELETED_TEXT => self::STATUS_DELETED,
        self::STATUS_NEW_TEXT => self::STATUS_NEW,
    ];

    public const array STATUSES = [
        self::STATUS_ACTIVE => self::STATUS_ACTIVE_TEXT,
        self::STATUS_BLOCKED => self::STATUS_BLOCKED_TEXT,
        self::STATUS_DELETED => self::STATUS_DELETED_TEXT,
        self::STATUS_NEW => self::STATUS_NEW_TEXT,
    ];

    public const int PERMISSION_PRIVATE_TYPE = 1;
}
