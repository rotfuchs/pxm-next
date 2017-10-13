<?php

namespace App\Extras\Message;

use App\Events\MessageCreatedEvent;

class MessageCollector implements MessageCollectorInterface
{
    const ERROR_CODE = 100;
    const WARNING_CODE = 200;
    const INFO_CODE = 300;
    CONST MESSAGE_CODE = 400;

    private static $messages = [];

    public function writeError($message)
    {
        $this->saveMessage(self::ERROR_CODE, $message);
    }

    public function writeWarning($message)
    {
        $this->saveMessage(self::WARNING_CODE, $message);
    }

    public function writeInfo($message)
    {
        $this->saveMessage(self::INFO_CODE, $message);
    }

    public function writeMessage($message)
    {
        $this->saveMessage(self::MESSAGE_CODE, $message);
    }

    private function saveMessage($code, $message)
    {
        $message = [
            'code' => $code,
            'message' => $message,
            'created' => date('c')
        ];

        self::$messages[] = $message;

        event(new MessageCreatedEvent(...array_values($message)));
    }

}