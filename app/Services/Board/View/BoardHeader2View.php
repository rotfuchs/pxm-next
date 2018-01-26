<?php

namespace App\Services\Board\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class BoardHeader2View extends View
{
    public $isUserLoggedIn = false;
    public $isAdmin = false;

    protected $viewName = 'layout.header.boardheader2';

    public function __construct()
    {
        $this->isUserLoggedIn = \Auth::check();

        /** @var User $user */
        $user = \Auth::getUser();

        $this->isAdmin = ($user instanceof User) ? $user->isAdmin() : false;
    }
}