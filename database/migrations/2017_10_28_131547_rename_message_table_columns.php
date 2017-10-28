<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMessageTableColumns extends Migration
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
            'ALTER TABLE `pxm_message` 
                      CHANGE `m_id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, 
                      CHANGE `m_threadid` `thread_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `m_parentid` `parentid` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `m_userid` `user_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `m_usernickname` `usernickname` VARCHAR(30) NOT NULL DEFAULT \'\', 
                      CHANGE `m_usermail` `usermail` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `m_userhighlight` `userhighlight` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `m_subject` `subject` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `m_body` `body` MEDIUMTEXT NOT NULL, 
                      CHANGE `m_tstmp` `tstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `m_ip` `ip` VARCHAR(50) NOT NULL DEFAULT \'\', 
                      CHANGE `m_notification` `notification` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\';'
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
