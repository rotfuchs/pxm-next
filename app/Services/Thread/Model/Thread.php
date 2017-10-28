<?php

namespace App\Services\Thread\Model;

use App\Extras\Database\Model;

class Thread extends Model
{
    public $id;
    public $board_id;
    public $active;
    public $fixed;
    public $lastmsgtstmp;
    public $lastmsgid;
    public $msgquantity;
    public $views;
}