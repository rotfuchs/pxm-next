<?php

namespace App\Services\Board\View;

use App\Extras\View\View;
use App\Services\Thread\Model\Thread;
use App\Services\Thread\Query\ThreadQueryService;
use App\Services\Thread\Repository\Filter\ThreadsFilter;
use App\Services\Thread\View\ThreadListTableRowView;

class BoardThreadListView extends View
{
    public $threadTableRowViews = [];
    public $limit = 60;
    public $page = 0;

    protected $viewName = 'board.components.board.table';

    public function setBoardId($id)
    {
        foreach($this->getThreads($id) as $thread) {
            /** @var Thread $thread */
            $tableRowView = new ThreadListTableRowView();
            $tableRowView->setThread($thread);

            $this->threadTableRowViews[] = $tableRowView;
        }
    }

    private function getThreads($board_id)
    {
        /** @var ThreadQueryService $threadQueryService */
        $threadQueryService = \App::make(ThreadQueryService::class);

        $filter = new ThreadsFilter();
        $filter->board_id = $board_id;
        $filter->limit = $this->limit;
        $filter->offset = $this->limit * $this->page;

        return $threadQueryService->filter($filter);
    }

}