<?php

namespace App\Services\User\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class UserSetupView extends View
{
    public $boardHeaderView;

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

    public $layout = 'layout.user.profile';

    protected $viewName = 'user.setup';

    public function setUser(User $user)
    {
        $this->username = $user->nickname;
        $this->firstName = $user->firstname;
        $this->lastName = $user->lastname;
        $this->email = $user->privatemail;
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
    }
}