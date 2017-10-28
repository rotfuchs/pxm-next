<?php

namespace App\Services\Message\Query;

use App\Services\Message\Model\Message;
use App\Services\Message\Repository\Filter\MessageFilter;
use App\Services\Message\Repository\MessageRepository;

class MessageQueryService
{
    private $meesageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->meesageRepository = $messageRepository;
    }

    public function filter(MessageFilter $filter)
    {
        return $this->meesageRepository->filter($filter);
    }

    public function getSingle($message_id)
    {
        $filter = new MessageFilter();
        $filter->message_id = $message_id;

        $messages = $this->meesageRepository->filter($filter);

        if(!is_array($messages) || count($messages)!=1 || !isset($messages[0]) || !($messages[0] instanceof Message))
            return false;

        return $messages[0];
    }
}