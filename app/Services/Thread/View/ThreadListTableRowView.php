<?php

namespace App\Services\Thread\View;

use App\Extras\View\View;
use App\Services\Thread\Model\Thread;
use App\Services\User\View\UserNameLinkView;

class ThreadListTableRowView extends View
{
    public $board_id;
    public $post_id;
    public $thread_id;
    public $threadClass;
    public $topic;
    public $author;
    public $createdDateTime;
    public $viewCount;
    public $replyCount;
    public $lastMsgDateTime;
    public $lastMsgId;

    protected $viewName = 'board.components.board.tablerow';

    public function setThread(Thread $thread)
    {
        $this->board_id = $thread->board_id;
        $this->post_id = $thread->getRawValue('post_id');
        $this->thread_id = $thread->id;
        $this->threadClass = ($thread->fixed) ? 'fixed' : '';
        $this->topic = $thread->getRawValue('subject');

        $userLinkView = new UserNameLinkView();
        $userLinkView->id = $thread->getRawValue('user_id');
        $userLinkView->username = $thread->getRawValue('usernickname');
        $this->author = $userLinkView;

        $this->createdDateTime = date(\Config::get('app.date_format'), $thread->getRawValue('tstmp'));
        $this->viewCount = $thread->views;
        $this->replyCount = $thread->msgquantity;
        $this->lastMsgDateTime = date(\Config::get('app.date_format'), $thread->lastmsgtstmp);
        $this->lastMsgId = $thread->lastmsgid;
    }
}