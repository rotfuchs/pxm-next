<?php

namespace App\Services\Faq\Model;

use App\Extras\Database\Model;

class FaqTopic extends Model {
    public $faq_topic_id;
    public $faq_category_id;
    public $headline;
    public $content;
}