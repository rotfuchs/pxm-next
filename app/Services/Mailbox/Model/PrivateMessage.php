<?php

namespace App\Services\Message\Model;

use App\Extras\Database\Model;
use App\Extras\Parser\Parser;
use App\Extras\Parser\ParserDefinitions;

class PrivateMessage extends Model
{
    public $id;
    public $to_user_id;
    public $from_user_id;
    public $subject;
    public $body;
    public $tstmp;
    public $ip;
    public $to_state;
    public $from_state;
}