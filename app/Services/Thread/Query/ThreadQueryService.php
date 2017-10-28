<?php

namespace App\Services\Thread\Query;

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
}