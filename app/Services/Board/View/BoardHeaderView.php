<?php

namespace App\Services\Board\View;

use App\Extras\View\View;

class BoardHeaderView extends View
{
    public $isUserLoggedIn = false;
    public $board_id;

    protected $viewName = 'layout.header.boardheader';

    public function __construct()
    {
        $this->isUserLoggedIn = \Auth::check();
    }
}