<?php

namespace App\Services\Message\Model;

use App\Extras\Database\Model;

class MessageRead extends Model
{
    public $id;
    public $thread_id;
    public $parent_id;
    public $user_id;
    public $tstmp;
}