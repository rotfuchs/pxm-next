<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class MessageCreatedEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $code;
    public $message;
    public $created;

    public function __construct($code, $message, $created)
    {
        //
        $this->code = $code;
        $this->message = $message;
        $this->created = $created;
    }
}
