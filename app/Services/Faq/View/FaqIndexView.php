<?php

namespace App\Services\Faq\View;

use App\Extras\View\View;
use App\Services\Faq\Model\FaqCategory;
use App\Services\Faq\Query\FaqQueryService;

class FaqIndexView extends View {

    public $categories = [];

    protected $viewName = 'faq.index';

    /**
     * @param FaqCategory[] $categories
     */
    public function setCategories(array $categories)
    {
        foreach($categories as $category) {
            $view = new FaqCategoryView();
            $view->setCategory($category);
            $this->categories[] = $view->toView();
        }
    }
}