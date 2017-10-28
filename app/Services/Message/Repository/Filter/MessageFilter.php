<?php

namespace App\Services\Message\Repository\Filter;

class MessageFilter
{
    public $message_id;
    public $thread_id;
    public $orderField = 'tstmp';
    public $orderSort = 'DESC';
}