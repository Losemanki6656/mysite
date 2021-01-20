<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vacans;

class VacansController extends Controller
{
    public function index($id)
    {
        $vacans = Vacans::where('idwork', $id)->get();
        
        return view('bmtu',[
            'vacans'=> $vacans
        ]);
    }
}
