<?php

namespace App\Services\User\View\Admin;


use App\Extras\View\View;
use App\Services\User\Model\User;

class UserAdminTableRowView extends View
{
    public $id;
    public $username;
    public $email;
    public $lastOnlineDate = '-';

    protected $viewName = 'admin.user.table.row';

    public function setUser(User $user) {
        $this->id = $user->id;
        $this->username = $user->nickname;
        $this->email = $user->privatemail;
        if($user->lastonlinetstmp>0)
            $this->lastOnlineDate = date('d.m.Y H:i:s', $user->lastonlinetstmp);
    }
}