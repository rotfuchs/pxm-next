<?php

namespace App\Services\Message\Model;

use App\Extras\Database\Model;

class Message extends Model
{
    public $id;
    public $thread_id;
    public $parentid;
    public $user_id;
    public $usernickname;
    public $usermail;
    public $userhighlight;
    public $subject;
    public $body;
    public $tstmp;
    public $ip;
    public $notification;
}