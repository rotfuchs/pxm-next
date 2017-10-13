<?php

namespace App\Extras\Database;

abstract class Model
{
    public function toArray()
    {
        return call_user_func('get_object_vars', $this);
    }
}