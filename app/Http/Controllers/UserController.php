<?php

namespace App\Http\Controllers;


use App\Services\User\Model\User;
use App\Services\User\Query\UserQueryService;
use App\Services\User\View\UserProfileView;
use App\Services\User\View\UserSearchFormView;

class UserController extends Controller
{
    private $userQueryService;

    public function __construct(UserQueryService $userQueryService)
    {
        $this->userQueryService = $userQueryService;
    }

    public function getUserView($user_id, $layout = false)
    {
        $user = $this->userQueryService->getSingle($user_id);

        if(!($user instanceof User))
            return view('user.not_found');

        $userProfileView = new UserProfileView();
        $userProfileView->setUser($user);

        if($layout=='new_window')
            $userProfileView->layout = 'layout.user.profile';

        return $userProfileView->toView();
    }

    public function getSearchView()
    {
        $userSearchFormView = new UserSearchFormView();

        return view('user.searchframe', [
            'userSearch' => $userSearchFormView
        ]);
    }

    public function getSearchJson()
    {
        $userSearchFormView = new UserSearchFormView();

        return response()->json([
            'success' => ($userSearchFormView instanceof UserSearchFormView),
            'searchForm' => $userSearchFormView.''
        ]);
    }
}
