<?php

namespace App\Services\Message\View;

use App\Extras\View\View;
use App\Services\Message\Model\Message;
use App\Services\Message\Query\MessageQueryService;

class MessageView extends View
{
    public $post_id;
    public $thread_id;
    public $subject;
    public $createdDateTime;
    public $isReply = false;
    public $userName;
    public $content;
    public $replyMessageId;
    public $replySubject;
    public $replyUserName;
    public $slug;

    protected $viewName = 'message.message';

    public function setMessageId($message_id)
    {
        $message = $this->getMessage($message_id);

        if(!($message instanceof Message))
            return;

        $this->post_id = $message->id;
        $this->thread_id = $message->thread_id;
        $this->subject = $message->subject;
        $this->slug = str_slug($message->subject);
        $this->userName = $message->usernickname;
        $this->content = $message->getCleanBody();
        $this->createdDateTime = date(\Config::get('app.date_format'), $message->tstmp);

        if($message->parentid==0)
            return;

        $replyMessage = $this->getMessage($message->parentid);

        if(!($replyMessage instanceof Message))
            return;

        $this->replyMessageId = $replyMessage->id;
        $this->replySubject = $replyMessage->subject;
        $this->replyUserName = $replyMessage->usernickname;
        $this->isReply = true;
    }

    private function getMessage($message_id)
    {
        /** @var MessageQueryService $messageQueryService */
        $messageQueryService = \App::make(MessageQueryService::class);

        return $messageQueryService->getSingle($message_id);
    }
}