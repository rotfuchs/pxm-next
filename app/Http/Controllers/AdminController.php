<?php

namespace App\Http\Controllers;

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
        return view('admin.user', []);
    }
}
