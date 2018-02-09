<?php

namespace App\Services\Template\Query;

use App\Services\Template\Repository\Filter\TemplatesFilter;
use App\Services\Template\Repository\TemplateRepository;

class TemplateQueryService {

    private $templateRepository;

    public function __construct(TemplateRepository $templateRepository)
    {
        $this->templateRepository = $templateRepository;
    }

    /**
     * gibt eine Liste der Templates zurueck
     *
     * @param TemplatesFilter $filter
     * @return \App\Services\Template\Model\Template[]|bool
     */
    public function filter(TemplatesFilter $filter) {
        return $this->templateRepository->filter($filter);
    }
}