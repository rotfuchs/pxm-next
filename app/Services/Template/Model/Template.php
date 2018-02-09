<?php

namespace App\Services\Template\Model;

use App\Extras\Database\Model;

class Template extends Model
{
    public $id;
    public $name;
    public $frame_top;
    public $frame_bottom;
    public $path;
}