<?php

namespace App\Http\Controllers;

use App\Services\Board\View\BoardHeader2View;
use App\Services\Mailbox\View\MailboxView;
use App\Services\User\Model\User;
use App\Services\User\Query\UserQueryService;

class MailboxController extends Controller
{
    private $userQueryService;

    public function __construct(UserQueryService $userQueryService)
    {
        $this->userQueryService = $userQueryService;
    }

    //
    public function getMailboxView($layout = false)
    {
        if(!\Auth::check())
            return view('auth.access_denied');

        /** @var User $user */
        $user = \Auth::getUser();
        $dbUser = $this->userQueryService->getSingle($user->id);

        if(!($user instanceof User))
            return view('user.not_found');

        $mailboxView = new MailboxView();
        $mailboxView->setUser($dbUser);

        if($layout!='new_window') {
            $mailboxView->boardHeaderView = new BoardHeader2View();
            $mailboxView->layout = 'layout.app';
        }

        return $mailboxView->toView();
    }

    public function getMailboxTabView($tab)
    {
        if(!\Auth::check())
            return view('auth.access_denied');

        /** @var User $user */
        $user = \Auth::getUser();
        $dbUser = $this->userQueryService->getSingle($user->id);

        if(!($user instanceof User))
            return view('user.not_found');

        $mailboxView = new MailboxView();
        $mailboxView->setUser($dbUser);
        $mailboxView->setVisibleTab($tab);

        $mailboxView->boardHeaderView = new BoardHeader2View();
        $mailboxView->layout = 'layout.app';

        return $mailboxView->toView();
    }
}
