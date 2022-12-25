<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponet1() {
        return view('tests.compoment-test1');
    }

    public function showComponet2() {
        return view('tests.compoment-test2');
    }
}
