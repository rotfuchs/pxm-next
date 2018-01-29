<?php

namespace App\Services\Menu\Factory;

use App\Services\Menu\Query\MenuQueryService;

class MenuServiceFactory {

    /**
     * @return MenuQueryService
     */
    public static function getMenuQueryService() {
        return resolve('App\Services\Menu\Query\MenuQueryService');
    }
}