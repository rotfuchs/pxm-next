<?php

namespace App\Services\User\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class UserNameLinkView extends View
{
    public $id;
    public $username;

    protected $viewName = 'user.components.userlink';

    public function setUser(User $user)
    {
        $this->id = $user->id;
        $this->username = $user->nickname;
    }

}