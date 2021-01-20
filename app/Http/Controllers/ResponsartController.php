<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Responsart;
use App\Responwork;
use App\State;

class ResponsartController extends Controller
{
    public function index($id)
    {
        $responsarts = Responsart::where('idvacan', $id)->get();      
        $responworks = Responwork::where('idvacan', $id)->get();
        
        return view('registor',[
            'responsarts'=> $responsarts,
            'responworks'=> $responworks,
            'idvacan' => $id
        ]); 
    }

    public function store(Request $request) 
    {
    
        $r=$request->validate([
            'idvacan' => 'required', 
            'first_name' => 'required', 
            'last_name' => 'required',
            'middle_name' => 'required',
            'dataroj' => 'required',
            'malumot' => 'required',
            'institut' => 'required',
            'xarbiy' => 'required',
            'mestoroj' => 'required',
            'telnomer' => 'required',
            'pass_seriya' => 'required',
            'pass_number' => 'required',
        ]);
        

        $custId = $request->cust_id;
        $state = State::updateOrCreate(['id' => $custId],['idvacan' => $request->idvacan, 'first_name' => $request->first_name,'last_name'=>$request->last_name , 
                                    'middle_name'=>$request->middle_name ,'dataroj'=>$request->dataroj ,'malumot'=>$request->malumot , 
                                    'institut'=>$request->institut ,'xarbiy'=>$request->xarbiy ,'mestoroj'=>$request->mestoroj , 
                                    'telnomer'=>$request->telnomer ,'pass_seriya'=>$request->pass_seriya ,'pass_number'=>$request->pass_number]); 
        
        if(empty($request->cust_id))
            $msg = 'Customer entry created successfully.';
        else
            $msg = 'Customer data is updated successfully';
        return redirect()->route('questest', ['id' => $request->idvacan])->with('success',$msg)->with('state_id', $state->id); 
    }
}
