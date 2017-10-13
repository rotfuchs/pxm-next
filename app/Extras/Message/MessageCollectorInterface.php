<?php

namespace App\Extras\Message;

interface MessageCollectorInterface
{
    public function writeError($message);

    public function writeWarning($message);

    public function writeInfo($message);

    public function writeMessage($message);
}