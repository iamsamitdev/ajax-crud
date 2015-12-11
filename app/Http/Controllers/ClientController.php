<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Validator;

// Model
use App\Client;

class ClientController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$data_client = Client::orderBy('id','desc')->get();
		//dd($data_client);
		return view('clients.index')->with('client',$data_client);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('clients.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */

	/* === C.R.U.D. === */
	public function store()
	{
		$rules = array(
			'name'     	=> 'required',
			'country'	=> 'required',
			'state'		=> 'required',
			'city'		=> 'required',
			'zip'		=> 'required',
			'address'	=> 'required',
			'contact'	=> 'required',
			'phone'		=> 'required',
			'email'		=> 'required|email',
			'website'	=> 'url',
		);

		$validator = Validator::make(Request::all(), $rules);

		if ($validator->passes())
		{
			$store	= new Client;
			$store->fill(Request::all());
			$store->save();

			// Reload Table Data
			$data_client = array(
				'client' 		=> Client::orderBy('id', 'desc')->get(),
				'refresh'	=> true
			);
	
			return view('clients.table')->with($data_client);

		}else{
			if( Request::ajax() ) 
			{
				return view('clients.create')->withErrors($validator)->withInput(Request::all());				
			}

			return 0;
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
