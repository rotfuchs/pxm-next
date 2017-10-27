<?php

namespace App\Services\User\Repository;

use App\Extras\Database\DbAdapter;
use App\Extras\Message\MessageCollector;
use App\Services\User\Model\User;
use App\Services\User\Repository\Filter\UserFilter;

class UserRepository
{
    private $db;
    private $messageCollector;

    public function __construct()
    {
        $this->db = new DbAdapter();
        $this->messageCollector = new MessageCollector();
    }

    public function filter(UserFilter $filter)
    {
        try {
            $select = $this->db
                ->table('pxm_user')
                ->select('pxm_user.*');

            if(is_numeric($filter->user_id))
                $select = $select->where('pxm_user.id', '=', $filter->user_id);

            if($filter->modsOnly==true) {
                $select = $select
                    ->join('pxm_moderator', 'pxm_moderator.user_id', '=', 'pxm_user.id')
                    ->addSelect('pxm_moderator.board_id');
            }

            return $this->db->fetchAll($select, User::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}