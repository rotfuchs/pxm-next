<?php

namespace App\Services\Thread\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\Thread\Model\Thread;
use App\Services\Thread\Repository\Filter\ThreadsFilter;

class ThreadRepository
{
    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    public function filter(ThreadsFilter $filter)
    {
        try {
            $select = $this->db
                ->table('pxm_thread')
                ->join('pxm_message', 'pxm_thread.id', '=','pxm_message.thread_id')
                ->select('pxm_thread.*', 'pxm_message.usernickname', 'pxm_message.subject', 'pxm_message.tstmp', 'pxm_message.user_id', 'pxm_message.id as post_id')
                ->where('pxm_message.parentid' , '=', 0)
                ->orderByDesc('pxm_thread.fixed');

            if(is_numeric($filter->thread_id))
                $select = $select->where('pxm_thread.id', '=', $filter->thread_id);

            if(is_numeric($filter->board_id))
                $select = $select->where('board_id', '=', $filter->board_id);

            if($filter->showFixed==false)
                $select = $select->where('fixed', '=', 0);

            if(strlen($filter->orderField)>0)
                $select = $select->orderBy($filter->orderField, $filter->orderSort);

            if(is_numeric($filter->limit))
                $select = $select->limit($filter->limit);

            if(is_numeric($filter->offset))
                $select = $select->offset($filter->offset);

            return $this->db->fetchAll($select, Thread::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }

    public function getThreadNumber($thread_id, $board_id, $orderField, $orderSort)
    {
        try {
            $orderSort = ($orderSort!='ASC') ? 'DESC' : 'ASC';

            $result = \DB::select(
                'SELECT rank FROM ( 
                              SELECT *, @rownum := @rownum + 1 as rank
                              FROM pxm_thread, (SELECT @rownum := 0) r
                              WHERE board_id = :board_id 
                              ORDER BY fixed DESC, :orderField '.$orderSort.' ) z
                      WHERE z.id = :thread_id', [
                        'board_id' => $board_id,
                        'thread_id' => $thread_id,
                        'orderField' => $orderField
            ]);

            if(is_array($result) && isset($result[0]->rank))
                return $result[0]->rank;

            return false;

        } catch (\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}