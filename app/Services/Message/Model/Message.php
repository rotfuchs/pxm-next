<?php

namespace App\Services\Message\Model;

use App\Extras\Database\Model;
use App\Extras\Parser\Parser;
use App\Extras\Parser\ParserDefinitions;

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

    public function getCleanBody()
    {
        $parser = new Parser(new ParserDefinitions());

        return $parser->parse($this->body);
    }
}