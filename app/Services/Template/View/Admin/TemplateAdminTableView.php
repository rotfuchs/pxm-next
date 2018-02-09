<?php

namespace App\Services\Template\View\Admin;

use App\Extras\View\View;
use App\Services\Template\Model\Template;
use App\Services\Template\Query\TemplateQueryService;
use App\Services\Template\Repository\Filter\TemplatesFilter;

class TemplateAdminTableView extends View
{
    public $tableRows = [];

    protected $viewName = 'admin.template.table';

    public function __toString()
    {
        $this->buildTableRows($this->loadTemplates());

        return parent::__toString();
    }

    /**
     * @param Template[] $templates
     */
    public function buildTableRows(array $templates) {
        foreach($templates as $template) {
            $tableRow = new TemplateAdminTableRowView();
            $tableRow->setTemplate($template);

            $this->tableRows[] = $tableRow;
        }
    }

    /**
     * @return Template[]|bool
     */
    private function loadTemplates() {
        /** @var TemplateQueryService $templateQueryService */
        $templateQueryService = \App::make(TemplateQueryService::class);

        return $templateQueryService->filter(new TemplatesFilter());
    }
}