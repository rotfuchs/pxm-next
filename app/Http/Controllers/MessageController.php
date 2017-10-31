<?php

namespace App\Http\Controllers;

use App\Services\Message\View\MessageTreeView;
use App\Services\Message\View\MessageView;
use App\Services\Thread\Model\Thread;
use App\Services\Thread\Query\ThreadQueryService;

class MessageController extends Controller
{
    private $threadQueryService;

    public function __construct(ThreadQueryService $threadQueryService)
    {
        $this->threadQueryService = $threadQueryService;
    }

    //
    public function getMessageTreeView($thread_id)
    {
        $messageTreeView = new MessageTreeView();
        $messageTreeView->setThreadId($thread_id);

        return view('message.treeframe', [
            'messageTree' => $messageTreeView
        ]);
    }

    public function getMessageView($post_id)
    {
        $messageView = new MessageView();
        $messageView->setMessageId($post_id);

        /** @var Thread $thread */
        $thread = $this->threadQueryService->getSingle($messageView->thread_id);

        return view('message.messageframe', [
            'message' => $messageView,
            'board_id' => ($thread instanceof Thread) ? $thread->board_id : -1,
            'thread_id' => $messageView->thread_id,
            'post_id' => $post_id
        ]);
    }

    public function getMessageTreeJson()
    {
        $thread_id = request()->get('thread_id');
        $post_id = request()->get('post_id');

        $messageView = new MessageView();
        $messageView->setMessageId($post_id);

        $messageTreeView = new MessageTreeView();
        $messageTreeView->setThreadId($thread_id);

        return response()->json([
            'success' => ($messageView instanceof MessageView && $messageTreeView instanceof MessageTreeView),
            'tree' => $messageTreeView.'',
            'message' => $messageView.''
        ]);
    }

    public function getTreeJson()
    {
        $thread_id = request()->get('thread_id');

        $messageTreeView = new MessageTreeView();
        $messageTreeView->setThreadId($thread_id);

        return response()->json([
            'success' => ($messageTreeView instanceof MessageTreeView),
            'tree' => $messageTreeView.''
        ]);
    }

    public function getMessageJson()
    {
        $post_id = request()->get('post_id');

        $messageView = new MessageView();
        $messageView->setMessageId($post_id);

        return response()->json([
            'success' => ($messageView instanceof MessageView),
            'message' => $messageView.''
        ]);
    }
}
