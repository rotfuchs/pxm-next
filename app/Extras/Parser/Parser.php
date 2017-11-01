<?php

namespace App\Extras\Parser;


class Parser
{
    private $parserDefinitions;

    public function __construct(ParserDefinitions $parserDefinitions)
    {
        $this->parserDefinitions = $parserDefinitions;
    }

    public function parse($string)
    {
        $clean = htmlentities($string);

        return $this->addQuotes($this->parseDefinitions($clean));
    }

    private function addQuotes($string)
    {
        $paragrapths = explode("<br />", nl2br($string));

        foreach($paragrapths as $pos => $paragrapth) {
            $quoteSymbol = $this->parserDefinitions->getQuoteSymbol();
            $quoteSymbolSafe = htmlentities($quoteSymbol);
            $firstChar = substr(trim($paragrapth),0, 4);

            if($firstChar==$quoteSymbol || $firstChar==$quoteSymbolSafe) {
                $paragrapths[$pos] = '<span class="quote">'.$paragrapth.'</span>';
            }
        }

        return implode('<br />', $paragrapths);
    }

    private function parseDefinitions($string)
    {
        foreach($this->parserDefinitions->getAll() as $parse) {
            $string = $this->replace($string, $parse['pattern'], $parse['replace']);
        }

        return $string;
    }

    private function replace($string, $pattern, $replace)
    {
        if(preg_match($pattern, $string, $match)) {
            return preg_replace(
                $pattern,
                $replace,
                $string
            );
        }

        return $string;
    }
}