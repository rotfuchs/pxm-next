<?php

namespace App\Services\User\View;

use App\Extras\View\View;
use App\Services\User\Model\User;

class UserProfileView extends View
{
    public $id;
    public $username;
    public $msgCount;
    public $memberSinceDateTime;
    public $name;
    public $email;
    public $city;
    public $ageGroup;
    public $job;
    public $website;
    public $xboxGamertag;
    public $psnId;
    public $nintendoCode;
    public $hobbies;
    public $firstGame;
    public $favoriteGameGenre;
    public $favoriteGames;
    public $favoriteMovieGenre;
    public $favoriteMovies;
    public $dvdProfilerLink;
    public $lastProfileUpdateDateTime;
    public $layout = 'layout.app';


    protected $viewName = 'user.profile';

    public function setUser(User $user)
    {
        $this->id = $user->id;
        $this->username = $user->nickname;
        $this->msgCount = $user->msgquantity;
        $this->memberSinceDateTime = date(\Config::get('app.date_format'), $user->registrationtstmp);
        $this->name = $this->getProfileFieldValue($user->getFullName());
        $this->email = $this->getProfileFieldValue($user->publicmail);
        $this->city = $this->getProfileFieldValue($user->city);
        $this->ageGroup = $this->getProfileFieldValue($user->profile_jahrgang);
        $this->job = $this->getProfileFieldValue($user->profile_beruf);
        $this->website = $this->getProfileFieldValue($user->profile_url);
        $this->xboxGamertag = $this->getProfileFieldValue($user->profile_xbl);
        $this->psnId = $this->getProfileFieldValue($user->profile_psn);
        $this->nintendoCode = $this->getProfileFieldValue($user->profile_wii);
        $this->hobbies = $this->getProfileFieldValue($user->profile_hobby);
        $this->firstGame = $this->getProfileFieldValue($user->profile_espiel);
        $this->favoriteGameGenre = $this->getProfileFieldValue($user->profile_liebgenre);
        $this->favoriteGames = $this->getProfileFieldValue($user->profile_gameprof);
        $this->favoriteMovieGenre = $this->getProfileFieldValue($user->profile_liebfgenre);
        $this->favoriteMovies = $this->getProfileFieldValue($user->profile_liebfilme);
        $this->dvdProfilerLink = $this->getProfileFieldValue($user->profile_dvdprofile);
        $this->lastProfileUpdateDateTime = date(\Config::get('app.date_format'), $user->profilechangedtstmp);
    }

    private function getProfileFieldValue($string)
    {
        return (strlen(trim($string))>0) ? $string : '-';
    }

}