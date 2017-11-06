<?php

namespace App\Services\Board\View;

use App\Extras\View\View;
use App\Services\Board\Model\Board;
use App\Services\Board\Query\BoardQueryService;
use App\Services\Thread\Model\Thread;
use App\Services\Thread\Query\ThreadQueryService;
use App\Services\Thread\Repository\Filter\ThreadsFilter;
use App\Services\Thread\View\ThreadListTableRowView;
use App\Services\User\Model\User;

class BoardThreadListView extends View
{
    public $name;
    public $id;
    public $threadTableRowViews = [];
    public $limit = 60;
    public $page = 0;
    public $prevPage;
    public $nextPage;

    protected $viewName = 'board.components.board.table';

    public function setBoardId($id)
    {
        $board = $this->getBoard($id);

        if(!($board instanceof Board))
            return;

        $this->id = $board->id;
        $this->name = $board->name;

        foreach($this->getThreads($id) as $thread) {
            /** @var Thread $thread */
            $tableRowView = new ThreadListTableRowView();
            $tableRowView->setThread($thread);

            $this->threadTableRowViews[] = $tableRowView;
        }

        $this->nextPage = $this->page + 1;
        $this->prevPage = $this->page - 1;
    }

    private function getThreads($board_id)
    {
        /** @var ThreadQueryService $threadQueryService */
        $threadQueryService = \App::make(ThreadQueryService::class);

        $filter = new ThreadsFilter();
        $filter->board_id = $board_id;
        $filter->limit = $this->limit;
        $filter->offset = $this->limit * $this->page;

        if(\Auth::check()) {
            /** @var User $user */
            $user = \Auth::getUser();

            $filter->messageread_user_id = $user->id;
        }


        return $threadQueryService->filter($filter);
    }

    private function getBoard($board_id)
    {
        /** @var BoardQueryService $boardQueryService */
        $boardQueryService = \App::make(BoardQueryService::class);

        /** @var Board $board */
        $board = $boardQueryService->getSingle($board_id);

        if(!($board instanceof Board) || !$board->active)
            return false;

        return $board;
    }

}