<?php

namespace App\Listeners;

use App\Events\Message\LoadSingleMessageEvent;
use App\Services\Message\Command\MessageReadCommandService;
use App\Services\User\Model\User;

class MarkMessageAsReadListener
{
    private $messageReadCommandService;

    public function __construct(MessageReadCommandService $messageReadCommandService)
    {
        $this->messageReadCommandService = $messageReadCommandService;
    }

    /**
     * Handle the event.
     *
     * @param  LoadSingleMessageEvent $event
     * @return void
     */
    public function handle($event)
    {
        if(\Auth::check()) {
            /** @var User $user */
            $user = \Auth::getUser();

            $success = $this->messageReadCommandService->markMessageAsRead(
                $user->id,
                $event->message->id,
                $event->message->thread_id,
                $event->message->parentid
            );

            $bla = 2;
        }
    }
}
