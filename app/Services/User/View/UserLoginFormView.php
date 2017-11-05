<?php

namespace App\Services\User\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class UserLoginFormView extends View
{
    public $showError = false;
    public $isLoggedIn = false;
    public $welcomeMessage;

    protected $viewName = 'auth.login';

    public function __construct()
    {
        $this->isLoggedIn = \Auth::check();
        $this->welcomeMessage = 'Login';

        if($this->isLoggedIn) {
            /** @var User $user */
            $user = \Auth::getUser();

            $this->welcomeMessage = 'Willkommen, '.$user->nickname.'!';
        }
    }
}