<?php

namespace App\Services\User\Command;


use App\Services\User\Model\User;
use App\Services\User\Repository\Filter\UserFilter;
use App\Services\User\Repository\UserRepository;

class UserCommandService
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function updateRememberToken($user_id, $remember_token)
    {
        $filter = new UserFilter();
        $filter->user_id = $user_id;

        $user = $this->userRepository->filter($filter);

        if(!is_array($user) || count($user)!=1)
            return false;

        /** @var User $singleUser */
        $singleUser = $user[0];
        $singleUser->remember_token = $remember_token;

        return $this->userRepository->save($singleUser);
    }
}