<?php

namespace App\Extras\View;

abstract class View
{
    protected $viewName;

    public function toView()
    {
        return view($this->viewName, $this->toArray()).'';
    }

    public function toArray()
    {
        return call_user_func('get_object_vars', $this);
    }

    public function __toString()
    {
        return $this->toView().'';
    }
}