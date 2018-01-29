<?php

namespace App\Services\Menu\View\Admin;

use App\Extras\View\View;
use App\Services\Menu\Factory\MenuServiceFactory;

class MenuSidebarView extends View
{
    public $menu;

    public $layout = 'layout.admin';

    protected $viewName = 'admin.menu.sidebar.sidebar';

    public function __construct()
    {
        $menuQueryService = MenuServiceFactory::getMenuQueryService();

        $this->menu = new MenuListView();

        foreach($menuQueryService->getAdminMenuItems() as $item) {
            $this->menu->addItem($item);
        }
    }
}