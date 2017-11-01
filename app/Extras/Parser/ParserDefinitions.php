<?php

namespace App\Extras\Parser;


class ParserDefinitions
{
    private $definitions = [
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
        'image' => [
            'pattern' => '/\[img\:(.*?)\]/s',
            'replace' => '<img src="$1" />',
            'content' => '$1'
        ],
        'url' => [
            'pattern' => '/\[((http|https|ftp|ftps)\:\/\/.*?)\]/s',
            'replace' => '[<a href="$1" target="_blank">$1</a>]',
            'content' => '$1'
        ]
    ];

    private $quoteSymbol = '>';

    public function getQuoteSymbol()
    {
        return $this->quoteSymbol;
    }

    public function getAll()
    {
        return $this->definitions;
    }

    public function get($identifier)
    {
        return (isset($this->definitions[$identifier])) ? $this->definitions[$identifier] : false;
    }

    public function add($identifier, $pattern, $replace, $content)
    {
        $this->definitions[$identifier] = [
            'pattern' => $pattern,
            'replace' => $replace,
            'content' => $content
        ];
    }
}