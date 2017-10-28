<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameThreadTableColumns extends Migration
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
            'ALTER TABLE `pxm_thread` 
                      CHANGE `t_id` `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT, 
                      CHANGE `t_boardid` `board_id` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `t_active` `active` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `t_fixed` `fixed` TINYINT(3) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `t_lastmsgtstmp` `lastmsgtstmp` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `t_lastmsgid` `lastmsgid` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `t_msgquantity` `msgquantity` INT(10) UNSIGNED NOT NULL DEFAULT \'0\', 
                      CHANGE `t_views` `views` INT(10) UNSIGNED NOT NULL DEFAULT \'0\';'
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
