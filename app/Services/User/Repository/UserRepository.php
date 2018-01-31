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

            if(strlen($filter->nickname)>0)
                $select = $select->where('pxm_user.nickname', '=', $filter->nickname);

            if($filter->modsOnly==true) {
                $select = $select
                    ->join('pxm_moderator', 'pxm_moderator.user_id', '=', 'pxm_user.id')
                    ->addSelect('pxm_moderator.board_id');
            }

            if(is_numeric($filter->limit) && $filter->limit>0)
                $select = $select->limit($filter->limit);

            if(is_numeric($filter->offset) && $filter->offset>0)
                $select = $select->offset($filter->offset);

            if(strlen($filter->orderField)>0)
                $select = $select->orderBy($filter->orderField, (strtolower($filter->orderSort)=='asc') ? 'asc' : 'desc');

            return $this->db->fetchAll($select, User::class);

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }

    public function save(User $user)
    {
        try {
            if(is_numeric($user->id) && $user->id>0) {
                $affedtedRows = $this->db
                    ->table('pxm_user')
                    ->where('id', $user->id)
                    ->update($user->toArray());

                return ($affedtedRows>0);
            } else {
                $userArray = $user->toArray();
                unset($userArray['id']);

                $user->id = $this->db
                    ->table('pxm_user')
                    ->insertGetId($userArray);

                return (is_numeric($user->id) && $user->id>0);
            }

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }

    public function count()
    {
        try {
            $select = $this->db
                ->table('pxm_user')
                ->select(\DB::raw('count(pxm_user.id) as userCount'));

            $result = $this->db->fetchRow($select);

            return (isset($result['userCount'])) ? $result['userCount'] : -1;

        } catch(\Exception $e) {
            $this->messageCollector->writeError($e->getMessage());

            return false;
        }
    }
}