<?php

namespace App\Services\Board\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\Board\Model\Board;
use App\Services\Board\Repository\Filter\BoardFilter;

class BoardRepository
{
    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    public function filter(BoardFilter $filter)
    {
        try {
            $select = $this->db->table('pxm_board');

            if(is_numeric($filter->board_id))
                $select = $select->where('id', '=', $filter->board_id);

            if(!is_null($filter->active))
                $select = $select->where('active', '=', 1);

            return $this->db->fetchAll($select, Board::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}