<?php

namespace App\Services\User\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class UserSetupView extends View
{
    public $boardHeaderView;

    public $profileTabClass = 'visible';
    public $passwordTabClass;
    public $extrasTabClass;

    public $username;
    public $firstName;
    public $lastName;
    public $email;
    public $city;
    public $year;
    public $job;
    public $url;

    public $xbox_gamertag;
    public $psnId;
    public $wiiCode;

    public $hobbies;
    public $signature;

    public $firstGame;
    public $gameCollectionUrl;
    public $favoriteGameGenres;
    public $favoriteGames;

    public $dvdProfilerUrl;
    public $favoriteMovieGenres;
    public $favoriteMovies;

    public $saveCookie;
    public $skinId;
    public $threadListSort;
    public $privateMail;
    public $privateNotification;
    public $showImages;
    public $showSmilies;
    public $showSignatues;
    public $visible;

    public $popupOnlineList;
    public $showUserProfileInfos;
    public $topFrameSize;
    public $bottomFrameSize;
    public $frameView;
    public $userLayout;
    public $listView;
    public $shortTopic;

    public $layout = 'layout.user.profile';

    protected $viewName = 'user.setup';

    public function setUser(User $user)
    {
        $this->username = $user->nickname;
        $this->firstName = $user->firstname;
        $this->lastName = $user->lastname;
        $this->email = $user->publicmail;
        $this->city = $user->city;
        $this->year = $user->profile_jahrgang;
        $this->job = $user->profile_beruf;
        $this->url = $user->profile_url;

        $this->xbox_gamertag = $user->profile_xbl;
        $this->psnId = $user->profile_psn;
        $this->wiiCode = $user->profile_wii;

        $this->hobbies = $user->profile_hobby;
        $this->signature = $user->signature;

        $this->firstGame = $user->profile_espiel;
        $this->gameCollectionUrl = $user->profile_gameprof;
        $this->favoriteGameGenres = $user->profile_liebgenre;
        $this->favoriteGames = $user->profile_liebspiel;

        $this->dvdProfilerUrl = $user->profile_dvdprofile;
        $this->favoriteMovieGenres = $user->profile_liebfgenre;
        $this->favoriteMovies = $user->profile_liebfilme;

        $this->saveCookie = (strlen($user->ticket)>0);
        $this->skinId = $user->skinid;
        $this->threadListSort = $user->threadlistsort;
        $this->privateMail = $user->privatemail;
        $this->privateNotification = ($user->privatenotification);
        $this->showImages = ($user->parseimg);
        $this->showSmilies = ($user->replacetext);
        $this->showSignatues = ($user->showsignatures);
        $this->visible = ($user->visible);

        $this->popupOnlineList = ($user->onlinelist);
        $this->showUserProfileInfos = ($user->showstatus);
        $this->topFrameSize = $user->frame_top;
        $this->bottomFrameSize = $user->frame_bottom;
        $this->frameView = $user->frameview;
        $this->userLayout = $user->layout;
        $this->listView = ($user->listpunkte);
        $this->shortTopic = ($user->txtlngak);
    }

    public function setVisibleTab($name)
    {
        switch($name)
        {
            case 'password':
                $this->profileTabClass = '';
                $this->passwordTabClass = 'visible';
                $this->extrasTabClass = '';
                break;

            case 'extras':
                $this->profileTabClass = '';
                $this->passwordTabClass = '';
                $this->extrasTabClass = 'visible';
                break;

            default:
                $this->profileTabClass = 'visible';
                $this->passwordTabClass = '';
                $this->extrasTabClass = '';
                break;
        }
    }
}