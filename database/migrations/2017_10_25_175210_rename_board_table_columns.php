<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameBoardTableColumns extends Migration
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
            'ALTER TABLE `pxm_board` 
                      CHANGE `b_id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, 
                      CHANGE `b_name` `name` VARCHAR(100) NOT NULL DEFAULT \'\', 
                      CHANGE `b_description` `description` VARCHAR(255) NOT NULL DEFAULT \'\', 
                      CHANGE `b_position` `position` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `b_active` `active` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `b_lastmsgtstmp` `lastmsgtstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `b_skinid` `skinid` SMALLINT(5) UNSIGNED NOT NULL DEFAULT \'1\', 
                      CHANGE `b_timespan` `timespan` SMALLINT(5) UNSIGNED NOT NULL DEFAULT \'100\', 
                      CHANGE `b_threadlistsort` `threadlistsort` VARCHAR(20) NOT NULL DEFAULT \'\', 
                      CHANGE `b_parsestyle` `parsestyle` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `b_parseurl` `parseurl` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `b_parseimg` `parseimg` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `b_replacetext` `replacetext` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\';'
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
