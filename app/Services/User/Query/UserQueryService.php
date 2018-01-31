<?php

namespace App\Services\User\Query;


use App\Services\User\Model\User;
use App\Services\User\Repository\Filter\UserFilter;
use App\Services\User\Repository\UserRepository;

class UserQueryService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function filter(UserFilter $filter)
    {
        return $this->userRepository->filter($filter);
    }

    public function getSingle($user_id)
    {
        $filter = new UserFilter();
        $filter->user_id = $user_id;

        $userList = $this->userRepository->filter($filter);

        if(!is_array($userList) || count($userList)!=1 || !isset($userList[0]) || !($userList[0] instanceof User))
            return false;

        return $userList[0];
    }

    public function count()
    {
        return $this->userRepository->count();
    }
}