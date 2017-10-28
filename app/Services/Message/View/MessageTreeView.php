<?php

namespace App\Services\Message\View;

use App\Extras\View\View;
use App\Services\Message\Model\Message;
use App\Services\Message\Query\MessageQueryService;
use App\Services\Message\Repository\Filter\MessageFilter;

class MessageTreeView extends View
{
    public $userName;
    public $subject;
    public $children = [];

    protected $viewName = 'message.tree';

    public function setThreadId($thread_id)
    {
        MessageTreeItemView::setMessages($this->getMessages($thread_id));
        $firstMessage = MessageTreeItemView::getFirstMessage();

        if(!($firstMessage instanceof Message))
            return;

        $this->userName = $firstMessage->usernickname;
        $this->subject = $firstMessage->subject;
        $this->children = MessageTreeItemView::getChildren($firstMessage->id);
    }

    private function getMessages($thread_id)
    {
        /** @var MessageQueryService $messageQueryService */
        $messageQueryService = \App::make(MessageQueryService::class);

        $filter = new MessageFilter();
        $filter->thread_id = $thread_id;

        return $messageQueryService->filter($filter);
    }
}