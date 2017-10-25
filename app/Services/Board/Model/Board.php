<?php

namespace App\Services\Board\Model;

use App\Extras\Database\Model;

class Board extends Model
{
    public $name;
    public $description;
    public $position;
    public $active;
    public $lastmsgtstmp;
    public $skinid;
    public $timespan;
    public $threadlistsort;
    public $parsestyle;
    public $parseurl;
    public $parseimg;
    public $replacetext;
}