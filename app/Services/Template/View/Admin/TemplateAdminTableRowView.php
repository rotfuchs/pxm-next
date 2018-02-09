<?php

namespace App\Services\Template\View\Admin;

use App\Extras\View\View;
use App\Services\Template\Model\Template;

class TemplateAdminTableRowView extends View
{
    public $id;
    public $name;

    protected $viewName = 'admin.template.table.row';

    public function setTemplate(Template $template) {
        $this->id = $template->id;
        $this->name = $template->name;
    }
}