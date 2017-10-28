<?php

namespace App\Services\Message\Query;

use App\Services\Message\Repository\MessageRepository;

class MessageQueryService
{
    private $meesageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->meesageRepository = $messageRepository;
    }
}