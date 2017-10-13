<?php

namespace App\Services\Faq\Repository;

use App\Services\Faq\Model\FaqCategory;
use App\Services\Faq\Model\FaqTopic;
use App\Services\Faq\Repository\Filter\FaqCategoryFilter;
use App\Services\Faq\Repository\Filter\FaqTopicFilter;
use Illuminate\Support\Facades\DB;

class FaqRepository {

    private $pdo;

    public function __construct()
    {
        $this->pdo = DB::getPdo();
    }

    /**
     * @param FaqCategoryFilter $filter
     * @return FaqCategory[]
     */
    public function filterCategories(FaqCategoryFilter $filter)
    {
        try {
            $select = DB::table('pxm_faq_category');

            if(is_numeric($filter->faq_category_id))
                $select->where('faq_category_id', '=', $filter->faq_category_id);

            $std = $this->pdo->prepare($select->toSql());
            $std->execute();

            return $std->fetchAll(\PDO::FETCH_CLASS, FaqCategory::class);

        } catch(\Exception $e) {

        }
    }

    /**
     * @param FaqTopicFilter $filter
     * @return FaqTopic[]
     */
    public function filterTopics(FaqTopicFilter $filter)
    {
        try {
            $select = DB::table('pxm_faq_topic');

            $std = $this->pdo->prepare($select->toSql());
            $std->execute();

            return $std->fetchAll(\PDO::FETCH_CLASS, FaqTopic::class);

        } catch(\Exception $e) {

        }
    }
}