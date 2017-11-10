<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenamePrivateMessageTableColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('ALTER TABLE `pxm_priv_message` 
                                CHANGE `p_id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, 
                                CHANGE `p_touserid` `to_user_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                                CHANGE `p_fromuserid` `from_user_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                                CHANGE `p_subject` `subject` VARCHAR(100) NOT NULL DEFAULT \'\', 
                                CHANGE `p_body` `body` MEDIUMTEXT NOT NULL, 
                                CHANGE `p_tstmp` `tstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                                CHANGE `p_ip` `ip` VARCHAR(50) NOT NULL DEFAULT \'\', 
                                CHANGE `p_tostate` `to_state` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'1\', 
                                CHANGE `p_fromstate` `from_state` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'2\';');
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
