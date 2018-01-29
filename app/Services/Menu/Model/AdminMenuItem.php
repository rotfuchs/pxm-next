<?php

namespace App\Services\Menu\Model;

use App\Extras\Database\Model;

class AdminMenuItem extends Model
{
    public $id;
    public $name;
    public $icon;
    public $url;
}