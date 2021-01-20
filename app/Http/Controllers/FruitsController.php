<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class FruitsController extends Controller
{
    public function index()
    {
        $fructies = App\Fruits::zero();  
        return view('salom',compact('fructies'));
    }
    public function show($id)
    {
        $fruit = App\Fruits::find($id);
        return view('fruit',compact('fruit'));
    }
}
