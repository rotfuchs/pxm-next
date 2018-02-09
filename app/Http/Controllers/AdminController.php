<?php

namespace App\Http\Controllers;

use App\Services\Board\Query\BoardQueryService;
use App\Services\Board\View\Admin\BoardsAdminEditorView;
use App\Services\Board\View\Admin\BoardsAdminTableView;
use App\Services\Menu\View\Admin\MenuPaginationView;
use App\Services\Setting\View\Admin\SmilieAdminTableView;
use App\Services\Template\View\Admin\TemplateAdminTableView;
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
        $boardsTableView = new BoardsAdminTableView();

        return view('admin.boards', [
            'table' => $boardsTableView
        ]);
    }

    public function getBoardEditorView($id)
    {
        $boardQueryService = \App::make(BoardQueryService::class);
        $board = $boardQueryService->getSingle($id);

        $boardEditorView = new BoardsAdminEditorView();
        $boardEditorView->setBoard($board);

        return $boardEditorView;
    }

//    public function getTranslationView()
//    {
//        return view('admin.translations', []);
//    }

    public function getTemplatesView()
    {
        $templatesTable = new TemplateAdminTableView();

        return view('admin.templates', [
            'table' => $templatesTable
        ]);
    }

    public function getSmiliesView()
    {
        $smilieTable = new SmilieAdminTableView();

        return view('admin.smilies', [
            'table' => $smilieTable
        ]);
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
