<?php

namespace App\Http\Controllers;

use App\Services\Board\Query\BoardQueryService;
use App\Services\Board\Repository\Filter\BoardFilter;
use App\Services\Board\View\BoardIndexTableRowView;
use App\Services\Board\View\BoardThreadListView;
use App\Services\Message\View\MessageTreeView;
use App\Services\Message\View\MessageView;

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

    public function getBoardView($id)
    {
        $boardThreadListView = new BoardThreadListView();
        $boardThreadListView->setBoardId($id);

        $messageTreeView = new MessageTreeView();

        return view('board.board', [
            'threadList' => $boardThreadListView,
            'messageTree' => $messageTreeView,
            'message' => ''
        ]);
    }

    public function getBoardPostView($board_id, $thread_id, $post_id)
    {
        $boardThreadListView = new BoardThreadListView();
        $boardThreadListView->setBoardId($board_id);

        $messageTreeView = new MessageTreeView();
        $messageTreeView->setThreadId($thread_id);

        $messageView = new MessageView();
        $messageView->setMessageId($post_id);

        return view('board.board', [
            'threadList' => $boardThreadListView,
            'messageTree' => $messageTreeView,
            'message' => $messageView
        ]);
    }

}
