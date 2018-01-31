<?php

namespace App\Services\User\View\Admin;


use App\Extras\View\View;
use App\Services\User\Model\User;
use App\Services\User\Query\UserQueryService;
use App\Services\User\Repository\Filter\UserFilter;

class UserAdminTableView extends View
{
    public $userTableRows = [];
    public $limit = 30;
    public $offset = 0;

    protected $viewName = 'admin.user.table';

    public function setPageNumber($number) {
        if(is_numeric($number) && $number>=0)
            $this->offset = $number * $this->limit;
    }

    public function setOrderField($fieldName) {}

    public function setOrderSort($sort = 'asc') {}

    public function __toString()
    {
        $this->buildTableRows($this->loadUserList());

        return parent::__toString();
    }

    /**
     * @param User[] $userlist
     */
    private function buildTableRows(array $userlist) {
        foreach($userlist as $user) {
            /** @var User $user */
            $tableRow = new UserAdminTableRowView();
            $tableRow->setUser($user);

            $this->userTableRows[] = $tableRow;
        }
    }

    /**
     * @return User[]|bool
     */
    private function loadUserList() {
        /** @var UserQueryService $userQueryService */
        $userQueryService = \App::make(UserQueryService::class);

        $filter = new UserFilter();
        $filter->limit = $this->limit;
        $filter->offset = $this->offset;

        return $userQueryService->filter($filter);
    }

}