<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class ExceptionEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $exception;

    /**
     * ExceptionEvent constructor.
     * @param \Exception $e
     */
    public function __construct(\Exception $e)
    {
        //
        $this->exception = $e;
    }
}
