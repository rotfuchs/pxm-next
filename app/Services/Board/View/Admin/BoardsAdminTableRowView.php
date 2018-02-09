<?php

namespace App\Services\Board\View\Admin;

use App\Extras\View\View;
use App\Services\Board\Model\Board;

class BoardsAdminTableRowView extends View
{
    public $id;
    public $name;
    public $description;

    protected $viewName = 'admin.board.table.row';

    public function setBoard(Board $board) {
        $this->id = $board->id;
        $this->name = $board->name;
        $this->description = $board->description;
    }
}