<?php

namespace App\Services\Board\Query;


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
}