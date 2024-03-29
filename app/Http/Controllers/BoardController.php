<?php

namespace App\Http\Controllers;

use App\Services\Board\Model\Board;
use App\Services\Board\Query\BoardQueryService;
use App\Services\Board\Repository\Filter\BoardFilter;
use App\Services\Board\View\BoardHeader2View;
use App\Services\Board\View\BoardHeaderView;
use App\Services\Board\View\BoardIndexTableRowView;
use App\Services\Board\View\BoardThreadListView;
use App\Services\Message\View\MessageFormView;
use App\Services\Message\View\MessageTreeView;
use App\Services\Message\View\MessageView;
use App\Services\Thread\Query\ThreadQueryService;
use App\Services\User\View\UserLoginFormView;

class BoardController extends Controller
{
    private $boardQueryService;
    private $threadQueryService;

    public function __construct(
        BoardQueryService $boardQueryService,
        ThreadQueryService $threadQueryService
    )
    {
        $this->boardQueryService = $boardQueryService;
        $this->threadQueryService = $threadQueryService;
    }

    public function getBoardRedirect()
    {
        $board_id = request()->get('id');

        if(!is_numeric($board_id) || $board_id<=0)
            return redirect()->to('/boards');

        $board = $this->boardQueryService->getSingle($board_id);

        if(!($board instanceof Board))
            return redirect()->to('/boards');

        return redirect()->to(action('BoardController@getBoardView', [
            $board_id,
            str_slug($board->name)
        ]));
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

        $userLoginView = new UserLoginFormView();
        $userLoginView->showError = (request()->get('loginError')=='visible');

        return view('board.index', [
            'boards' => $boards,
            'loginView' => $userLoginView,
            'boardHeaderView' => new BoardHeader2View()
        ]);
    }

    public function getBoardView($id, $slug = null)
    {
        $boardThreadListView = new BoardThreadListView();
        $boardThreadListView->setBoardId($id);

        if($slug != $boardThreadListView->slug)
            return redirect()->to(action('BoardController@getBoardView', [
                $id,
                $boardThreadListView->slug
            ]));

        $messageTreeView = new MessageTreeView();

        $messageForm = new MessageFormView();

        $boardHeaderView = new BoardHeaderView();
        $boardHeaderView->board_id = $id;

        return view('board.board', [
            'boardHeader' => $boardHeaderView,
            'threadList' => $boardThreadListView,
            'messageTree' => $messageTreeView,
            'message' => $messageForm
        ]);
    }

    public function getBoardPageView($board_id, $page, $slug = null)
    {
        $boardThreadListView = new BoardThreadListView();
        $boardThreadListView->page = (int)$page;
        $boardThreadListView->setBoardId($board_id);

        if($slug != $boardThreadListView->slug)
            return redirect()->to(action('BoardController@getBoardPageView', [
                $board_id,
                $page,
                $boardThreadListView->slug
            ]));

        $boardHeaderView = new BoardHeaderView();
        $boardHeaderView->board_id = $board_id;

        return view('board.boardframe', [
            'boardHeader' => $boardHeaderView,
            'threadList' => $boardThreadListView,
        ]);
    }

    public function getBoardPageJson()
    {
        $board_id = request()->get('board_id');
        $page = request()->get('page');

        $boardThreadListView = new BoardThreadListView();
        $boardThreadListView->page = (int)$page;
        $boardThreadListView->setBoardId($board_id);

        return response()->json([
            'success' => ($boardThreadListView instanceof BoardThreadListView),
            'threadList' => $boardThreadListView.''
        ]);
    }

    public function getBoardPostView($board_id, $thread_id, $post_id, $slug = null)
    {
        $pageNumber = $this->threadQueryService->getPageNumberForThread($thread_id, $board_id);

        $messageView = new MessageView();
        $messageView->setMessageId($post_id);

        if($slug != $messageView->slug)
            return redirect()->to(action('BoardController@getBoardPostView', [
                $board_id,
                $thread_id,
                $post_id,
                $messageView->slug
            ]));

        $messageTreeView = new MessageTreeView();
        $messageTreeView->setThreadId($thread_id);

        $boardThreadListView = new BoardThreadListView();
        $boardThreadListView->page = $pageNumber;
        $boardThreadListView->setBoardId($board_id);

        $boardHeaderView = new BoardHeaderView();
        $boardHeaderView->board_id = $board_id;

        return view('board.board', [
            'boardHeader' => $boardHeaderView,
            'threadList' => $boardThreadListView,
            'messageTree' => $messageTreeView,
            'message' => $messageView
        ]);
    }

}
