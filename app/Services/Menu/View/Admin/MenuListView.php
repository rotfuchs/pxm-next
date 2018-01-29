<?php

namespace App\Services\Menu\View\Admin;

use App\Extras\View\View;
use App\Services\Menu\Model\AdminMenuItem;

class MenuListView extends View
{
    public static $activeMenuId;

    public $menuItems = [];

    public $layout = 'layout.admin';

    protected $viewName = 'admin.menu.sidebar.list';

    public function addItem(AdminMenuItem $item) {
        $view = new MenuItemView();
        $view->setMenuItem($item);

        if(self::$activeMenuId == $item->id)
            $view->setActive();

        $this->menuItems[] = $view;
    }
}