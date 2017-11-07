<?php

namespace App\Services\Message\View;

use App\Extras\View\View;
use App\Services\Message\Model\Message;

class MessageTreeItemView extends View
{
    public $id;
    public $thread_id;
    public $subject;
    public $userName;
    public $createdDateTime;
    public $children = [];
    public $slug;

    protected $viewName = 'message.components.tree.treeitem';

    private static $messages = [];

    public static function setMessages(array $messages)
    {
        self::$messages = $messages;
    }

    public function setMessage(Message $message)
    {
        $this->id = $message->id;
        $this->thread_id = $message->thread_id;
        $this->subject = $message->subject;
        $this->userName = $message->usernickname;
        $this->createdDateTime = date(\Config::get('app.date_format'), $message->tstmp);
        $this->children = self::getChildren($message->id);
        $this->slug = str_slug($message->subject);
    }

    public static function getFirstMessage()
    {
        foreach(self::$messages as $message) {
            /** @var Message $message */
            if($message->parentid==0)
                return $message;
        }

        return false;
    }

    public static function getChildren($msg_id)
    {
        $children = [];
        foreach(self::$messages as $message) {
            /** @var Message $message */
            if($message->parentid == $msg_id) {
                $treeItemView = new MessageTreeItemView();
                $treeItemView->setMessage($message);

                $children[] = $treeItemView;
            }
        }

        return $children;
    }

}