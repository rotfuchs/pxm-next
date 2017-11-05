<?php

namespace App\Auth;

use App\Services\User\Command\UserCommandService;
use App\Services\User\Model\User;
use App\Services\User\Query\UserQueryService;
use App\Services\User\Repository\Filter\UserFilter;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class CustomUserProvider implements UserProvider
{
    private $userQueryService;
    private $userCommandService;

    public function __construct(
        UserQueryService $userQueryService,
        UserCommandService $userCommandService
    )
    {
        $this->userQueryService = $userQueryService;
        $this->userCommandService = $userCommandService;
    }

    public function retrieveByCredentials(array $credentials)
    {
        if(!isset($credentials['nickname']) || !is_string($credentials['nickname']) || strlen($credentials['nickname'])<=0)
            return new User();

        $filter = new UserFilter();
        $filter->nickname = $credentials['nickname'];

        $user = $this->userQueryService->filter($filter);

        if(!is_array($user) || count($user)!=1)
            return new User();

        return $user[0];
    }

    public function retrieveById($identifier)
    {
        $user = $this->userQueryService->getSingle($identifier);

        if(!$user instanceof User)
            return new User();

        return $user;
    }

    public function retrieveByToken($identifier, $token)
    {
        $filter = new UserFilter();
        $filter->nickname = $identifier;

        $user = $this->userQueryService->filter($filter);

        if(!is_array($user) || count($user)!=1)
            return new User();

        return $user[0];
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        if(!($user instanceof User))
            return false;

        /** @var User $user */
        return ($this->userCommandService->updateRememberToken($user->id, $token));
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        /** @var User $user */
        if(!is_numeric($user->id) || $user->id<=0)
            return false;

        if(!isset($credentials['password']) || strlen($credentials['password'])<=0)
            return false;

        if((strcmp($user->getAuthPassword(),md5($credentials['password']))!=0))
            return false;

        return true;
    }
}