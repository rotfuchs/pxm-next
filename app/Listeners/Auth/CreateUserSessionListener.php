<?php

namespace App\Listeners\Auth;

use App\Services\User\Model\User;
use Illuminate\Auth\Events\Login;

class CreateUserSessionListener
{
    /**
     * Handle the event.
     *
     * @param Login $event
     * @return void
     */
    public function handle($event)
    {
        /** @var User $user */
        $user = $event->user;


//        if(is_numeric($user->sxSysUsers_id) && $user->sxSysUsers_id>0) {
//            $this->setUserId($user->sxSysUsers_id);
//            $this->deleteTmpUserFiles($user->sxSysUsers_id);
//        }
    }
}