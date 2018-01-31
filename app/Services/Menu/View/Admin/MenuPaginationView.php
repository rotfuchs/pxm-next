<?php

namespace App\Services\Menu\View\Admin;

use App\Extras\View\View;
use App\Services\User\Query\UserQueryService;

class MenuPaginationView extends View
{
    public $pageLinks = [];

    public $previewButtonClass = 'disabled';
    public $previewButtonUrl = '#';

    public $nextButtonClass = 'disabled';
    public $nextButtonUrl = '#';

    public $limit = 30;
    public $maxPageNumberButtonsCount = 3;
    public $currentPageNum = 0;
    public $baseUrl = '/admin/user';

    protected $viewName = 'admin.menu.pagination';

    public function setCurrentPage($number) {
        if(is_numeric($number) && $number>=0)
            $this->currentPageNum = $number;
    }

    public function __toString()
    {
        $this->buildButtons();

        return parent::__toString();
    }

    private function buildButtons() {
        $userCount = $this->getUserCount();

        $nextButtonUrl = $this->getNextPageUrl($userCount, $this->currentPageNum);
        if($nextButtonUrl!=false) {
            $this->nextButtonClass = '';
            $this->nextButtonUrl = $nextButtonUrl;
        }

        $prevButtonUrl = $this->getPrevPageUrl($this->currentPageNum);
        if($prevButtonUrl!=false) {
            $this->previewButtonClass = '';
            $this->previewButtonUrl = $prevButtonUrl;
        }

        $this->buildPageNumberButtons($userCount);
    }

    private function getUserCount() {
        /** @var UserQueryService $userQueryService */
        $userQueryService = \App::make(UserQueryService::class);

        return $userQueryService->count();
    }

    private function getMaxNumberOfPages($userCount) {
        return floor($userCount/$this->limit);
    }

    private function getNextPageUrl($userCount, $currentPageNum) {
        if($this->getMaxNumberOfPages($userCount)>$currentPageNum)
            return $this->baseUrl . '?page=' . ($currentPageNum+1);

        return false;
    }

    private function getPrevPageUrl($currentPageNum) {

        if($currentPageNum<=0)
            return false;

        if($currentPageNum==1)
            return $this->baseUrl;

        return $this->baseUrl . '?page=' . ($currentPageNum-1);
    }

    private function buildPageNumberButtons($userCount) {
        $startNumber = $this->currentPageNum - (floor($this->maxPageNumberButtonsCount/2));

        if($startNumber<1)
            $startNumber = 1;

        $lastNumber = $startNumber+$this->maxPageNumberButtonsCount;
        $maxPageCount = $this->getMaxNumberOfPages($userCount);

        if($maxPageCount<$lastNumber) {
            $lastNumber = $maxPageCount;

            if($lastNumber-$this->maxPageNumberButtonsCount>=1)
                $startNumber = $lastNumber-$this->maxPageNumberButtonsCount;
        }


        $tmpPageNumber = $startNumber;
        while($tmpPageNumber<=$lastNumber) {
            $this->pageLinks[] = [
                'number' => $tmpPageNumber,
                'url' => $this->baseUrl .'?page='. $tmpPageNumber,
                'buttonClass' => ($tmpPageNumber==$this->currentPageNum) ? 'active' : ''
            ];
            $tmpPageNumber++;
        }
    }



}