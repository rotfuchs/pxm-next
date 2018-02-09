<?php

namespace App\Services\Board\View\Admin;

use App\Extras\View\View;
use App\Services\Board\Model\Board;
use App\Services\Board\Query\BoardQueryService;

class BoardsAdminTableView extends View
{
    public $tableRows = [];

    protected $viewName = 'admin.board.table';

    public function __toString()
    {
        $this->buildTableRows($this->loadBoards());

        return parent::__toString();
    }

    /**
     * @param Board[] $boards
     */
    public function buildTableRows(array $boards) {
        foreach($boards as $board) {
            $tableRow = new BoardsAdminTableRowView();
            $tableRow->setBoard($board);

            $this->tableRows[] = $tableRow;
        }
    }

    /**
     * @return Board[]|bool
     */
    public function loadBoards() {
        /** @var BoardQueryService $boardQueryService */
        $boardQueryService = \App::make(BoardQueryService::class);

        return $boardQueryService->getAll();
    }
}