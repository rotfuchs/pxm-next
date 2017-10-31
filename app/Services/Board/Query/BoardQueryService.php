<?php

namespace App\Services\Board\Query;


use App\Services\Board\Model\Board;
use App\Services\Board\Repository\BoardRepository;
use App\Services\Board\Repository\Filter\BoardFilter;

class BoardQueryService
{
    private $boardRepository;

    public function __construct(BoardRepository $boardRepository)
    {
        $this->boardRepository = $boardRepository;
    }

    public function getAll()
    {
        return $this->boardRepository->filter(new BoardFilter());
    }

    public function filter(BoardFilter $filter)
    {
        return $this->boardRepository->filter($filter);
    }

    public function getSingle($board_id)
    {
        $filter = new BoardFilter();
        $filter->board_id = $board_id;

        $boards = $this->boardRepository->filter($filter);

        if(!is_array($boards) || count($boards)!=1 || !($boards[0] instanceof Board))
            return false;

        return $boards[0];
    }
}