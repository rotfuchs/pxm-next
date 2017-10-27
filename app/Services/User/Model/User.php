<?php

namespace App\Services\User\Model;

use App\Extras\Database\Model;

class User extends Model
{
    protected $tableName = 'pxm_user';

    public $id;
    public $nickname;
    public $password;
    public $passwordkey;
    public $ticket;
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

    public function getFullName()
    {
        return $this->firstname .' '. $this->lastname;
    }
}