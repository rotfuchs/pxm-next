<?php

namespace App\Services\Message\Model;

use App\Extras\Database\Model;

class Message extends Model
{
    public $id;
    public $thread_id;
    public $parentid;
    public $user_id;
    public $usernickname;
    public $usermail;
    public $userhighlight;
    public $subject;
    public $body;
    public $tstmp;
    public $ip;
    public $notification;

    private $parses = [
        'bold' => [
            'pattern' => '/\[[bB]\:(.*?)\]/s',
            'replace' => '<strong>$1</strong>',
            'content' => '$1'
        ],
        'italic' => [
            'pattern' => '/\[[iI]\:(.*?)\]/s',
            'replace' => '<i>$1</i>',
            'content' => '$1'
        ],
        'underline' => [
            'pattern' => '/\[[uU]\:(.*?)\]/s',
            'replace' => '<u>$1</u>',
            'content' => '$1'
        ],
        'url' => [
            'pattern' => '/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/',
            'replace' => '<a href="$0" target="_blank">$0</a>',
            'content' => '$1'
        ]
    ];

    public function getCleanBody()
    {
        $clean = htmlentities($this->body.'[http://google.de]');

        return $this->parse($this->addQuotes($clean));
    }

    private function addQuotes($string)
    {
        $paragrapths = explode("<br />", nl2br($string));

        foreach($paragrapths as $pos => $paragrapth)
            if(substr($paragrapth,0, 4)=='&gt;')
                $paragrapths[$pos] = '<span class="quote">'.$paragrapth.'</span>';

        return implode('<br />', $paragrapths);
    }


    private function parse($string)
    {
        foreach($this->parses as $parse) {
            if(preg_match($parse['pattern'], $string, $match))
                $string = preg_replace(
                    $parse['pattern'],
                    $parse['replace'],
                    $string
                );
        }

        return $string;
    }
}