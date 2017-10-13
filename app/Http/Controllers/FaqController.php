<?php

namespace App\Http\Controllers;

use App\Services\Faq\Query\FaqQueryService;
use App\Services\Faq\View\FaqIndexView;

class FaqController extends Controller
{
    private $faqQueryService;

    public function __construct(FaqQueryService $faqQueryService)
    {
        $this->faqQueryService = $faqQueryService;
    }

    //
    public function getFaqIndexView()
    {
        $faqIndexView = new FaqIndexView();
        $faqIndexView->setCategories($this->faqQueryService->getAllCategories());

        return $faqIndexView->toView();
    }
}
