<?php

namespace App\Services\User\Repository\Filter;

class UserFilter
{
    public $user_id;
    public $nickname;
    public $modsOnly;

    public $limit;
    public $offset;

    public $orderField;
    public $orderSort;
}