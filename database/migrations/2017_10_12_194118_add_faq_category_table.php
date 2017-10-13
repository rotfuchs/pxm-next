<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFaqCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('CREATE TABLE `pxm_faq_category` ( `faq_category_id` INT(11) NOT NULL AUTO_INCREMENT , `name` VARCHAR(250) NOT NULL , PRIMARY KEY (`faq_category_id`));');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('DROP TABLE pxm_faq_category');
    }
}
