<?php

namespace App\Services\Thread\Repository\Filter;

class ThreadsFilter
{
    public $thread_id;
    public $board_id;
    public $showFixed = true;
    public $messageread_user_id;
    public $orderField = 'lastmsgtstmp';
    public $orderSort = 'DESC';
    public $limit = 60;
    public $offset = 0;
}