<?php

namespace App\Services\Message\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\Message\Model\MessageRead;

class MessageReadRepository
{
    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    public function insert(MessageRead $messageRead)
    {
        try {
            return $this->db
                ->table('pxm_messageread')
                ->insert($messageRead->toArray());

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }

    public function delete($user_id, $thread_id = null, $message_id = null)
    {
        try {
            if(!is_numeric($user_id) || $user_id<=0)
                return false;

            $statement = $this->db
                ->table('pxm_messageread')
                ->where('user_id', '=', $user_id);

            if(is_numeric($thread_id) && $thread_id>0)
                $statement = $statement->where('thread_id', '=', $thread_id);

            if(is_numeric($message_id) && $message_id>0)
                $statement = $statement->where('id', '=', $message_id);

            return $statement->delete();

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}