<?php

namespace App\Http\Controllers;

use App\Services\Board\Query\BoardQueryService;
use App\Services\Board\Repository\Filter\BoardFilter;

class BoardController extends Controller
{
    private $boardQueryService;

    public function __construct(BoardQueryService $boardQueryService)
    {
        $this->boardQueryService = $boardQueryService;
    }

    //
    public function getBoardListView()
    {
        $filter = new BoardFilter();
        $filter->active = 1;
        $boards = $this->boardQueryService->filter($filter);

        return view('board.list', []);
    }

}
