<?php

if(!function_exists('get_body_layout_class'))
{
    function get_body_layout_class()
    {
        if(\Auth::check())
        {
            /** @var \App\Services\User\Model\User $user */
            $user = \Auth::getUser();

            return 'layout'.$user->layout;
        }
        return '';
    }
}