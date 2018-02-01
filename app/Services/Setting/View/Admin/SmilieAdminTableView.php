<?php

namespace App\Services\Setting\View\Admin;

use App\Extras\View\View;
use App\Services\Setting\Query\SmilieSettingQueryService;
use App\Services\Setting\Repository\Filter\SmiliesFilter;

class SmilieAdminTableView extends View
{
    public $tableRows = [];

    protected $viewName = 'admin.smilie.table';

    public function __toString()
    {
        $this->buildTableRows();

        return parent::__toString();
    }

    private function buildTableRows() {
        $smilieSettingQueryService = \App::make(SmilieSettingQueryService::class);
        $smilies = $smilieSettingQueryService->filter(new SmiliesFilter());

        foreach($smilies as $smilie) {
            $tableRow = new SmilieAdminTableRowView();
            $tableRow->setSmilie($smilie);

            $this->tableRows[] = $tableRow;
        }
    }
}