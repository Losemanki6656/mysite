<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StateController extends Controller
{
    /**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/

	public function index()
	{
		$customers = Customer::latest()->paginate(4);
		return view('customers.index',compact('customers'))->with('i', (request()->input('page', 1) - 1) * 4);
	}

	/**
	* Show the form for creating a new resource.
	*
	* @return \Illuminate\Http\Response
	*/

	public function create()
	{
		return view('customers.create');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @return \Illuminate\Http\Response
	*/

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
		'ans_cout' => 'required',
		]);

		$custId = $request->cust_id;
        Customer::updateOrCreate(['id' => $custId],['idvacan' => $request->idvacan, 'first_name' => $request->first_name,'last_name'=>$request->last_name , 
                                    'middle_name'=>$request->middle_name ,'dataroj'=>$request->dataroj ,'malumot'=>$request->malumot , 
                                    'institut'=>$request->institut ,'xarbiy'=>$request->xarbiy ,'mestoroj'=>$request->mestoroj , 
                                    'telnomer'=>$request->telnomer ,'pass_seriya'=>$request->pass_seriya ,'pass_number'=>$request->pass_number ,
                                    'ans_cout'=>$request->ans_cout ]);
        
        if(empty($request->cust_id))
			$msg = 'Customer entry created successfully.';
		else
			$msg = 'Customer data is updated successfully';
        return redirect()->route('welcome')->with('success',$msg);
        
	}

	/**
	* Display the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function show(Customer $customer)
	{
		return view('welcome',compact('customer'));
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/
	
	public function edit($id)
	{
		$where = array('id' => $id);
		$customer = Customer::where($where)->first();
		return Response::json($customer);
	}

	/**
	* Update the specified resource in storage.
	*
	* @param \Illuminate\Http\Request $request
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function update(Request $request)
	{

	}

	/**
	* Remove the specified resource from storage.
	*
	* @param int $id
	* @return \Illuminate\Http\Response
	*/

	public function destroy($id)
	{
		$cust = Customer::where('id',$id)->delete();
		return Response::json($cust);
	}
}