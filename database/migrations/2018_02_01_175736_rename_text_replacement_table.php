<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTextReplacementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement("ALTER TABLE `pxm_textreplacement` 
                                  CHANGE `tr_name` `name` VARCHAR(20) NOT NULL DEFAULT '', 
                                  CHANGE `tr_replacement` `replacement` VARCHAR(255) NOT NULL DEFAULT '', 
                                  CHANGE `t_nr` `id` VARCHAR(20) NOT NULL DEFAULT '';");
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
