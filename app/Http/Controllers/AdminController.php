<?php

namespace App\Http\Controllers;

use App\Services\Menu\View\Admin\MenuPaginationView;
use App\Services\User\View\Admin\UserAdminTableView;
use Illuminate\Support\Facades\Request;

class AdminController extends Controller
{
    //
    public function getDashboardView()
    {
        return view('admin.dashboard', []);
    }

    public function getSettingsView()
    {
        return view('admin.settings', []);
    }

    public function getBoardsView()
    {
        return view('admin.boards', []);
    }

    public function getTranslationView()
    {
        return view('admin.translations', []);
    }

    public function getTemplatesView()
    {
        return view('admin.templates', []);
    }

    public function getSmiliesView()
    {
        return view('admin.smilies', []);
    }

    public function getUserView()
    {
        $userTable = new UserAdminTableView();
        $userTable->setPageNumber(Request::get('page'));

        $pagination = new MenuPaginationView();
        $pagination->setCurrentPage(Request::get('page'));

        return view('admin.user', [
            'table' => $userTable,
            'pagination' => $pagination
        ]);
    }
}
