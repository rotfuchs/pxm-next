<?php

namespace App\Services\Mailbox\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class MailboxView extends View
{
    public $boardHeaderView;
    public $username;
    public $inboxTabClass = 'visible';
    public $archiveTabClass;

    public $layout = 'layout.user.profile';

    protected $viewName = 'mailbox.index';

    public function setUser(User $user)
    {
        $this->username = $user->nickname;
    }

    public function setVisibleTab($name)
    {
//        switch($name)
//        {
//            case 'password':
//                $this->profileTabClass = '';
//                $this->passwordTabClass = 'visible';
//                $this->extrasTabClass = '';
//                break;
//
//            case 'extras':
//                $this->profileTabClass = '';
//                $this->passwordTabClass = '';
//                $this->extrasTabClass = 'visible';
//                break;
//
//            default:
//                $this->profileTabClass = 'visible';
//                $this->passwordTabClass = '';
//                $this->extrasTabClass = '';
//                break;
//        }
    }
}