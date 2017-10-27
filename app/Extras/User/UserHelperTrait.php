<?php

namespace App\Extras\User;

use App\Services\User\Model\User;
use App\Services\User\Query\UserQueryService;
use App\Services\User\Repository\Filter\UserFilter;

trait UserHelperTrait {

    private static $modUserList;

    protected function getModUserForBoard($board_id)
    {
        $mods = [];
        foreach($this->getModUser() as $user) {
            /** @var User $user */
            if($user->getRawValue('board_id')==$board_id)
                $mods[] = $user;
        }

        return $mods;
    }

    protected function getModUser()
    {
        if(!is_array(self::$modUserList))
            self::$modUserList = $this->loadModUserList();

        return self::$modUserList;
    }

    private function loadModUserList()
    {
        /** @var UserQueryService $userQueryService */
        $userQueryService = \App::make(UserQueryService::class);

        $filter = new UserFilter();
        $filter->modsOnly = true;

        return $userQueryService->filter($filter);
    }
}