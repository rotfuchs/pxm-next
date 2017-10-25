<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    //
    public function test()
    {
        return view('test.test');
    }

    public function test2()
    {
        return view('test.test2');
    }
}
