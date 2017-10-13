<?php

namespace App\Services\Faq\View;

use App\Extras\View\View;
use App\Services\Faq\Model\FaqCategory;
use App\Services\Faq\Query\FaqQueryService;

class FaqCategoryView extends View {

    public $headline = '';
    public $topics = [];

    protected $viewName = 'faq.components.index.category';

    public function setCategory(FaqCategory $category) {

        $this->headline = $category->name;

        $faqQueryService = \App::make(FaqQueryService::class);
        $topics = $faqQueryService->getAllTopics();

        foreach($topics as $topic) {
            if($topic->faq_category_id == $category->faq_category_id) {
                $view = new FaqToicView();
                $view->headline = $topic->headline;
                $view->content = $topic->content;

                $this->topics[] = $view->toView();
            }
        }
    }
}