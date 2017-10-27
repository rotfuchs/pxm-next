<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameModeratorTableColumns extends Migration
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
            'ALTER TABLE `pxm_moderator` 
                      CHANGE `mod_userid` `user_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `mod_boardid` `board_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\';'
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
