<?php

namespace App\Services\Thread\Query;

use App\Services\Thread\Model\Thread;
use App\Services\Thread\Repository\Filter\ThreadsFilter;
use App\Services\Thread\Repository\ThreadRepository;

class ThreadQueryService
{
    private $threadRepository;

    public function __construct(ThreadRepository $threadRepository)
    {
        $this->threadRepository = $threadRepository;
    }

    public function filter(ThreadsFilter $filter)
    {
        return $this->threadRepository->filter($filter);
    }

    public function getSingle($thread_id)
    {
        if(!is_numeric($thread_id))
            return false;

        $filter = new ThreadsFilter();
        $filter->thread_id = $thread_id;

        $threads = $this->threadRepository->filter($filter);

        if(!is_array($threads) || count($threads)!=1 || !($threads[0] instanceof Thread))
            return false;

        return $threads[0];
    }
}