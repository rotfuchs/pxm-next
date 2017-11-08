<?php

namespace App\Http\Controllers;

use App\Services\Board\View\BoardHeader2View;
use App\Services\User\Model\User;
use App\Services\User\Query\UserQueryService;
use App\Services\User\View\UserProfileView;
use App\Services\User\View\UserSearchFormView;
use App\Services\User\View\UserSetupView;

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

    public function getSetupView($layout = false)
    {
        if(!\Auth::check())
            return view('auth.access_denied');

        /** @var User $user */
        $user = \Auth::getUser();
        $dbUser = $this->userQueryService->getSingle($user->id);

        if(!($user instanceof User))
            return view('user.not_found');

        $userSetupView = new UserSetupView();
        $userSetupView->setUser($dbUser);

        if($layout!='new_window') {
            $userSetupView->boardHeaderView = new BoardHeader2View();
            $userSetupView->layout = 'layout.app';
        }

        return $userSetupView->toView();
    }

    public function getSearchJson()
    {
        $userSearchFormView = new UserSearchFormView();

        return response()->json([
            'success' => ($userSearchFormView instanceof UserSearchFormView),
            'searchForm' => $userSearchFormView.''
        ]);
    }

    public function getLogoutRedirect()
    {
        \Auth::logout();
        session()->flush();

        return redirect()->to('/boards');
    }

    public function postAuthenticateJson()
    {
        $isUserValid = \Auth::validate(request()->all());

        $success = ($isUserValid && !\Auth::check() && \Auth::attempt(request()->all()));

        return response()->json([
            'success' => $success
        ]);
    }

    public function postAuthenticateRedirect()
    {
        $isUserValid = \Auth::validate(request()->all());

        $success = ($isUserValid && !\Auth::check() && \Auth::attempt(request()->all()));

        if($success)
            return redirect()->to('/boards');

        return redirect()->to('/boards?loginError=visible');
    }
}
