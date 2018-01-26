<?php

namespace App\Services\User\Model;

use App\Extras\Database\Model;
use Illuminate\Contracts\Auth\Authenticatable;

class User extends Model implements Authenticatable
{
    protected $tableName = 'pxm_user';

    public $id;
    public $nickname;
    public $password;
    public $passwordkey;
    public $ticket;
    public $remember_token;
    public $firstname;
    public $lastname;
    public $city;
    public $info;
    public $showstatus;
    public $frameview;
    public $txtlng;
    public $txtlngak;
    public $onlinelist;
    public $listpunkte;
    public $layout;
    public $publicmail;
    public $privatemail;
    public $registrationmail;
    public $registrationtstmp;
    public $msgquantity;
    public $lastonlinetstmp;
    public $profilechangedtstmp;
    public $imgfile;
    public $signature;
    public $profile_icq;
    public $profile_url;
    public $highlight;
    public $status;
    public $post;
    public $edit;
    public $admin;
    public $visible;
    public $skinid;
    public $frame_top;
    public $frame_bottom;
    public $threadlistsort;
    public $timeoffset;
    public $parseimg;
    public $replacetext;
    public $privatenotification;
    public $showsignatures;
    public $profile_jahrgang;
    public $profile_espiel;
    public $profile_liebgenre;
    public $profile_liebspiel;
    public $profile_beruf;
    public $profile_hobby;
    public $profile_rangord;
    public $profile_liebfilme;
    public $profile_dvdprofile;
    public $profile_cyprofil;
    public $profile_liebfgenre;
    public $profile_gameprof;
    public $profile_spielvisi;
    public $profile_filmvisi;
    public $profile_xbl;
    public $profile_psn;
    public $profile_wii;

    public function isAdmin()
    {
        return ($this->admin==1 && in_array($this->id, \Config::get('user.admin_user_ids')));
    }

    public function getFullName()
    {
        return $this->firstname .' '. $this->lastname;
    }

    public function getAuthIdentifierName()
    {
        return 'id';
    }

    public function getAuthIdentifier()
    {
        return $this->id;
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}