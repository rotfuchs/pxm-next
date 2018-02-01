<?php

namespace App\Services\Setting\Query;

use App\Services\Setting\Model\Smilie;
use App\Services\Setting\Repository\Filter\SmiliesFilter;

class SmilieSettingQueryService {

    private $smilieSettingRepository;

    public function __construct(SmilieSettingRepository $smilieSettingRepository)
    {
        $this->smilieSettingRepository = $smilieSettingRepository;
    }

    /**
     * @param SmiliesFilter $filter
     * @return Smilie[]|bool
     */
    public function filter(SmiliesFilter $filter) {
        return $this->smilieSettingRepository->filter($filter);
    }
}