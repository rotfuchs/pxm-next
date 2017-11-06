<?php

namespace App\Services\Message\Command;


use App\Services\Message\Model\Message;
use App\Services\Message\Model\MessageRead;
use App\Services\Message\Repository\Filter\MessageFilter;
use App\Services\Message\Repository\MessageReadRepository;
use App\Services\Message\Repository\MessageRepository;

class MessageReadCommandService
{
    private $messageReadRepository;
    private $messageRepository;

    public function __construct(
        MessageReadRepository $messageReadRepository,
        MessageRepository $messageRepository
    )
    {
        $this->messageReadRepository = $messageReadRepository;
        $this->messageRepository = $messageRepository;
    }

    public function markMessageAsRead($user_id, $message_id, $thread_id = null, $parent_id = null)
    {
        $messageRead = $this->buildMessageReadModel($user_id, $message_id, $thread_id, $parent_id);

        if(!($messageRead instanceof MessageRead))
            return false;

        $this->messageReadRepository->delete(
            $messageRead->user_id,
            $messageRead->thread_id,
            $messageRead->id
        );

        return $this->messageReadRepository->insert($messageRead);
    }

    private function buildMessageReadModel($user_id, $message_id, $thread_id = null, $parent_id = null)
    {
        if(!is_numeric($user_id) || $user_id<=0 || !is_numeric($message_id) || $message_id<=0)
            return false;

        $messageRead = new MessageRead();
        $messageRead->tstmp = time();
        $messageRead->user_id = $user_id;
        $messageRead->id = $message_id;

        if(is_null($thread_id) || is_null($parent_id)) {
            $filter = new MessageFilter();
            $filter->message_id = $message_id;

            $messages = $this->messageRepository->filter($filter);

            if(!is_array($messages) || count($messages)!=1)
                return false;

            /** @var Message $message */
            $message = $messages[0];

            $thread_id = $message->thread_id;
            $parent_id = $message->parentid;
        }

        $messageRead->thread_id = $thread_id;
        $messageRead->parent_id = $parent_id;

        return $messageRead;
    }

}
