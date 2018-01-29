<?php

namespace App\Services\Menu\Repository;

use App\Services\Menu\Model\AdminMenuItem;
use Illuminate\Support\Facades\Config;

class MenuRepository
{
    /**
     * @return AdminMenuItem[]
     */
    public function getAdminMenuItems()
    {
        $items = [];
        foreach(Config::get('menu.admin') as $item)
            $items[] = new AdminMenuItem($item);

        return $items;
    }
}