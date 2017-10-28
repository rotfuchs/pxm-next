<?php

namespace App\Services\Message\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;

class MessageRepository
{
    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }


}