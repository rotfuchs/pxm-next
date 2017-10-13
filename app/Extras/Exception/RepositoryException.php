<?php

namespace App\Extras\Exception;

use App\Events\ExceptionEvent;
use Throwable;

class RepositoryException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);

        event(new ExceptionEvent($this));
    }
}