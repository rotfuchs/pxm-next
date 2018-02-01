<?php

namespace App\Services\Setting\View\Admin;

use App\Extras\View\View;
use App\Services\Setting\Model\Smilie;

class SmilieAdminTableRowView extends View
{
    public $name;
    public $smilie;
    public $id;

    protected $viewName = 'admin.smilie.table.row';

    public function setSmilie(Smilie $smilie) {
        $this->name = $smilie->name;
        $this->smilie = $smilie->replacement;
        $this->id = $smilie->id;
    }

}