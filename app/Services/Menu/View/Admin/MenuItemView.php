<?php

namespace App\Services\Menu\View\Admin;

use App\Extras\View\View;
use App\Services\Menu\Model\AdminMenuItem;

class MenuItemView extends View
{
    public $id;
    public $linkClass;
    public $url;
    public $iconName;
    public $name;

    public $layout = 'layout.admin';

    protected $viewName = 'admin.menu.sidebar.item';

    public function setMenuItem(AdminMenuItem $menuItem)
    {
        $this->id = $menuItem->id;
        $this->url = $menuItem->url;
        $this->iconName = $menuItem->icon;
        $this->name = $menuItem->name;
    }

    public function setActive()
    {
        $this->linkClass = 'active';
    }

}