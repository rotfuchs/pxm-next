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

if (!function_exists('get_mime_type'))
{
    function get_mime_type($filePath)
    {
        if(!is_file($filePath)) {
            return false;
        }

        $key = pathinfo($filePath, PATHINFO_EXTENSION);

        switch ($key) {
            case 'js':
                return 'text/javascript';
                break;

            case 'css':
                return 'text/css';
                break;

            default:
                return mime_content_type($filePath);
                break;
        }
    }
}