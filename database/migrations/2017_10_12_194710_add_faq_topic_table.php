<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFaqTopicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::statement('CREATE TABLE `pxm_faq_topic` ( `faq_topic_id` INT(11) NOT NULL AUTO_INCREMENT , `faq_category_id` INT(11) NOT NULL , `headline` VARCHAR(250) NOT NULL , `content` TEXT NOT NULL , PRIMARY KEY (`faq_topic_id`));');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::statement('DROP TABLE pxm_faq_topic');
    }
}
