<?php

namespace App\Services\Board\View;

use App\Extras\View\View;

class BoardHeader2View extends View
{
    public $isUserLoggedIn = false;

    protected $viewName = 'layout.header.boardheader2';

    public function __construct()
    {
        $this->isUserLoggedIn = \Auth::check();
    }
}