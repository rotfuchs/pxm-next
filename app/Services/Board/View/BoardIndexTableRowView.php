<?php

namespace App\Services\Board\View;

use App\Extras\User\UserHelperTrait;
use App\Extras\View\View;
use App\Services\Board\Model\Board;
use App\Services\User\Model\User;
use App\Services\User\View\UserNameLinkView;

class BoardIndexTableRowView extends View
{
    use UserHelperTrait;

    public $id;
    public $name;
    public $description;
    public $lastMsgDateTime;
    public $modList = [];

    protected $viewName = 'board.components.index.tablerow';

    public function setBoard(Board $board)
    {
        $this->id = $board->id;
        $this->name = $board->name;
        $this->description = $board->description;
        $this->lastMsgDateTime = date(\Config::get('app.date_format'), $board->lastmsgtstmp);

        foreach($this->getModUserForBoard($this->id) as $user) {
            /** @var User $user */
            $userLinkView = new UserNameLinkView();
            $userLinkView->setUser($user);

            $this->modList[] = $userLinkView;
        }
    }

}