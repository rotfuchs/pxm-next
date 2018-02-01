<?php

namespace App\Services\Setting\Query;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\Setting\Model\Smilie;
use App\Services\Setting\Repository\Filter\SmiliesFilter;

class SmilieSettingRepository {

    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    /**
     * @param SmiliesFilter $filter
     * @return Smilie[]|bool
     */
    public function filter(SmiliesFilter $filter)
    {
        try {
            $select = $this->db->table('pxm_textreplacement');

            if(is_numeric($filter->id))
                $select = $select->where('id', '=', $filter->id);

            if(!is_null($filter->name))
                $select = $select->where('name', '=', $filter->name);

            if(!is_null($filter->replacement))
                $select = $select->where('replacement', '=', $filter->replacement);

            return $this->db->fetchAll($select, Smilie::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}