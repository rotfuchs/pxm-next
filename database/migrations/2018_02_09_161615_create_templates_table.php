<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            'CREATE TABLE IF NOT EXISTS `pxm_templates` (
                     `id` int(10) NOT NULL,
                     `name` varchar(255) NOT NULL,
                     `frame_top` int(10) NOT NULL,
                     `frame_bottom` int(10) NOT NULL,
                     `path` int(11) NOT NULL
                    ) ENGINE=MyISAM DEFAULT CHARSET=latin1');

        DB::statement('ALTER TABLE `pxm2`.`pxm_templates` ADD PRIMARY KEY (`id`)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP TABLE pxm_templates');
    }
}
