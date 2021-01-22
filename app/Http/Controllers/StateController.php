<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\State;

class StateController extends Controller
{
    public function index()
    {
        $ariza = State::all();
        
        return view('ariza',[
            'ariza'=> $ariza
        ]);
    }
}
