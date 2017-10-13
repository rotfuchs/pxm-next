<?php

namespace App\Http\Controllers;

class BoardController extends Controller
{
    //
    public function getBoardListView()
    {
        return view('board.list', []);
    }

}
