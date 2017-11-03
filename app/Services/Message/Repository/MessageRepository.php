<?php

namespace App\Services\Message\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\Message\Model\Message;
use App\Services\Message\Repository\Filter\MessageFilter;

class MessageRepository
{
    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    public function filter(MessageFilter $filter)
    {
        try {
            $select = $this->db->table('pxm_message');

            if($filter->onlyTreeData === true)
                $select = $select->select([
                    'id', 'thread_id', 'parentid', 'user_id', 'usernickname', 'userhighlight', 'subject', 'tstmp'
                ]);

            if(is_numeric($filter->message_id))
                $select = $select->where('id', '=', $filter->message_id);

            if(!is_null($filter->thread_id))
                $select = $select->where('thread_id', '=', $filter->thread_id);

            if(!is_null($filter->orderField))
                $select = $select->orderBy($filter->orderField, $filter->orderSort);

            return $this->db->fetchAll($select, Message::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}