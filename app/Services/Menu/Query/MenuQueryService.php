<?php

namespace App\Services\Menu\Query;

use App\Services\Menu\Repository\MenuRepository;

class MenuQueryService
{
    private $menuRepository;

    public function __construct(MenuRepository $menuRepository)
    {
        $this->menuRepository = $menuRepository;
    }

    /**
     * @return \App\Services\Menu\Model\AdminMenuItem[]
     */
    public function getAdminMenuItems()
    {
        return $this->menuRepository->getAdminMenuItems();
    }
}