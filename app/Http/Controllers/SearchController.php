<?php

namespace App\Http\Controllers;

use App\Services\Board\View\BoardHeaderView;
use App\Services\Message\View\MessageSearchFormView;

class SearchController extends Controller
{
    //
    public function getSearchView($board_id)
    {
        $messageSearchFormView = new MessageSearchFormView();
        $messageSearchFormView->board_id = $board_id;

        $boardHeaderView = new BoardHeaderView();
        $boardHeaderView->board_id = $board_id;

        return view('search.searchframe', [
            'boardHeader' => $boardHeaderView,
            'postSearch' => $messageSearchFormView
        ]);
    }

    public function getSearchJson()
    {
        $board_id = request()->get('board_id');

        $messageSearchFormView = new MessageSearchFormView();
        $messageSearchFormView->board_id = $board_id;

        return response()->json([
            'success' => ($messageSearchFormView instanceof MessageSearchFormView),
            'searchForm' => $messageSearchFormView.''
        ]);
    }
}
