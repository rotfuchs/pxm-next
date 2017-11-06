<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameMessagereadTableColumns extends Migration
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
            'ALTER TABLE `pxm_messageread` 
                      CHANGE `r_id` `id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `r_threadid` `thread_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `r_parentid` `parent_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `r_userid` `user_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `r_tstmp2` `tstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\';'
        );

        DB::statement('ALTER TABLE `pxm_messageread` 
                      ADD INDEX `thread_list` (`thread_id`, `parent_id`, `user_id`);');

        DB::statement('ALTER TABLE `pxm_messageread` 
                      ADD INDEX `pxm_message` (`id`, `thread_id`, `user_id`);');
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
