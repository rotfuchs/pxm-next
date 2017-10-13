<?php

namespace App\Services\Faq\Query;

use App\Services\Faq\Repository\FaqRepository;
use App\Services\Faq\Repository\Filter\FaqCategoryFilter;
use App\Services\Faq\Repository\Filter\FaqTopicFilter;

class FaqQueryService {

    private $faqRepository;

    public function __construct(FaqRepository $faqRepository)
    {
        $this->faqRepository = $faqRepository;
    }

    public function getAllCategories()
    {
        return $this->faqRepository->filterCategories(new FaqCategoryFilter());
    }

    /**
     * @return \App\Services\Faq\Model\FaqTopic[]
     */
    public function getAllTopics()
    {
        return $this->faqRepository->filterTopics(new FaqTopicFilter());
    }
}