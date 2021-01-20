<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::all();
        
        return view('welcome',[
            'tests'=> $tests
        ]);
    }
}
