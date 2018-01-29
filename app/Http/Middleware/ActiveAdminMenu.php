<?php

namespace App\Http\Middleware;

use App\Services\Menu\View\Admin\MenuListView;
use Closure;

class ActiveAdminMenu
{
    /**
     * @param $request
     * @param Closure $next
     * @param bool $indicator
     * @return mixed
     */
    public function handle($request, Closure $next, $indicator = false)
    {
        if($indicator!=false)
            MenuListView::$activeMenuId = $indicator;

        return $next($request);
    }
}
