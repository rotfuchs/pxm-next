<?php

namespace App\Services\Faq\View;

use App\Extras\View\View;
use App\Services\Board\View\BoardHeader2View;
use App\Services\Faq\Model\FaqCategory;
use App\Services\Faq\Query\FaqQueryService;

class FaqIndexView extends View {

    public $boardHeaderView;
    public $categories = [];

    protected $viewName = 'faq.index';

    public function __construct()
    {
        $this->boardHeaderView = new BoardHeader2View();
    }

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