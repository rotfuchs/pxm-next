<?php

namespace App\Services\Template\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\Template\Model\Template;
use App\Services\Template\Repository\Filter\TemplatesFilter;

class TemplateRepository {

    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    /**
     * gibt eine Liste der Templates entsprechend der Filter zurueck
     *
     * @param TemplatesFilter $filter
     * @return Template[]|bool
     */
    public function filter(TemplatesFilter $filter)
    {
        try {
            $select = $this->db
                ->table('pxm_templates')
                ->select('pxm_templates.*');

            if(is_numeric($filter->id))
                $select = $select->where('pxm_templates.id', '=', $filter->id);

            if(strlen($filter->name)>0)
                $select = $select->where('pxm_templates.name', '=', $filter->name);

            return $this->db->fetchAll($select, Template::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}