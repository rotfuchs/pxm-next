<?php

namespace App\Services\Board\View\Admin;

use App\Extras\View\View;
use App\Services\Board\Model\Board;

class BoardsAdminEditorView extends View
{
    public $id;
    public $name;
    public $description;
    public $position;
    public $active;
    public $skinid;
    public $threadlistsort;

    protected $viewName = 'admin.board.editor';

    public function setBoard(Board $board) {
        $this->id = $board->id;
        $this->name = $board->name;
        $this->description = $board->description;
        $this->position = $board->position;
        $this->active = $board->active;
        $this->skinid = $board->skinid;
        $this->threadlistsort = $board->threadlistsort;
    }
}