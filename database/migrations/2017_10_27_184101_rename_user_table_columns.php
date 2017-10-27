<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameUserTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement(
            'ALTER TABLE `pxm_user` 
                      CHANGE `u_id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, 
                      CHANGE `u_nickname` `nickname` VARCHAR(30) NOT NULL DEFAULT \'\', 
                      CHANGE `u_password` `password` VARCHAR(32) NOT NULL DEFAULT \'\', 
                      CHANGE `u_passwordkey` `passwordkey` VARCHAR(32) NOT NULL DEFAULT \'\', 
                      CHANGE `u_ticket` `ticket` VARCHAR(32) NOT NULL DEFAULT \'\', 
                      CHANGE `u_firstname` `firstname` VARCHAR(30) NOT NULL DEFAULT \'\', 
                      CHANGE `u_lastname` `lastname` VARCHAR(30) NOT NULL DEFAULT \'\', 
                      CHANGE `u_city` `city` VARCHAR(30) NOT NULL DEFAULT \'\', 
                      CHANGE `u_info` `info` VARCHAR(30) NOT NULL DEFAULT \'\', 
                      CHANGE `u_showstatus` `showstatus` CHAR(1) NOT NULL DEFAULT \'1\', 
                      CHANGE `u_frameview` `frameview` CHAR(1) NOT NULL DEFAULT \'3\', 
                      CHANGE `u_txtlng` `txtlng` CHAR(2) NOT NULL DEFAULT \'60\', 
                      CHANGE `u_txtlngak` `txtlngak` CHAR(1) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_onlinelist` `onlinelist` CHAR(1) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_listpunkte` `listpunkte` CHAR(1) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_layout` `layout` CHAR(1) NOT NULL DEFAULT \'1\', 
                      CHANGE `u_publicmail` `publicmail` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `u_privatemail` `privatemail` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `u_registrationmail` `registrationmail` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `u_registrationtstmp` `registrationtstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_msgquantity` `msgquantity` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_lastonlinetstmp` `lastonlinetstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_profilechangedtstmp` `profilechangedtstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_imgfile` `imgfile` VARCHAR(20) NOT NULL DEFAULT \'\', 
                      CHANGE `u_signature` `signature` VARCHAR(120) NOT NULL DEFAULT \'\', 
                      CHANGE `u_profile_icq` `profile_icq` INT(11) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_profile_url` `profile_url` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `u_highlight` `highlight` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_status` `status` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_post` `post` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'1\', 
                      CHANGE `u_edit` `edit` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'1\', 
                      CHANGE `u_admin` `admin` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_visible` `visible` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'1\', 
                      CHANGE `u_skinid` `skinid` SMALLINT(5) UNSIGNED NOT NULL DEFAULT \'1\', 
                      CHANGE `u_frame_top` `frame_top` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\',
                      CHANGE `u_frame_bottom` `frame_bottom` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_threadlistsort` `threadlistsort` VARCHAR(20) NOT NULL DEFAULT \'last\', 
                      CHANGE `u_timeoffset` `timeoffset` SMALLINT(5) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_parseimg` `parseimg` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_replacetext` `replacetext` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_privatenotification` `privatenotification` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `u_showsignatures` `showsignatures` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'1\', 
                      CHANGE `u_profile_jahrgang` `profile_jahrgang` INT(11) NULL DEFAULT NULL, 
                      CHANGE `u_profile_espiel` `profile_espiel` TEXT NULL DEFAULT NULL, 
                      CHANGE `u_profile_liebgenre` `profile_liebgenre` TEXT NULL DEFAULT NULL, 
                      CHANGE `u_profile_liebspiel` `profile_liebspiel` TEXT NULL DEFAULT NULL, 
                      CHANGE `u_profile_beruf` `profile_beruf` VARCHAR(200) NULL DEFAULT NULL, 
                      CHANGE `u_profile_hobby` `profile_hobby` TEXT NULL DEFAULT NULL, 
                      CHANGE `u_profile_rangord` `profile_rangord` VARCHAR(20) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_profile_liebfilme` `profile_liebfilme` TEXT NULL DEFAULT NULL, 
                      CHANGE `u_profile_dvdprofile` `profile_dvdprofile` VARCHAR(255) NULL DEFAULT NULL, 
                      CHANGE `u_profile_cyprofil` `profile_cyprofil` VARCHAR(25) NULL DEFAULT NULL, 
                      CHANGE `u_profile_liebfgenre` `profile_liebfgenre` TEXT NULL DEFAULT NULL, 
                      CHANGE `u_profile_gameprof` `profile_gameprof` VARCHAR(255) NULL DEFAULT NULL, 
                      CHANGE `u_profile_spielvisi` `profile_spielvisi` TINYINT(11) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_profile_filmvisi` `profile_filmvisi` TINYINT(11) NOT NULL DEFAULT \'0\', 
                      CHANGE `u_profile_xbl` `profile_xbl` VARCHAR(30) NULL DEFAULT NULL, 
                      CHANGE `u_profile_psn` `profile_psn` VARCHAR(30) NULL DEFAULT NULL, 
                      CHANGE `u_profile_wii` `profile_wii` VARCHAR(30) NULL DEFAULT NULL;'
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
