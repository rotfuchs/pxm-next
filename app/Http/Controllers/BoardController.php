<?php

namespace App\Http\Controllers;

use App\Services\Board\Query\BoardQueryService;
use App\Services\Board\Repository\Filter\BoardFilter;
use App\Services\Board\View\BoardIndexTableRowView;

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
        $boards = [];

        foreach($this->boardQueryService->filter($filter) as $board) {
            $tableRowView = new BoardIndexTableRowView();
            $tableRowView->setBoard($board);

            $boards[] = $tableRowView;
        }


        return view('board.index', ['boards' => $boards]);
    }

}
