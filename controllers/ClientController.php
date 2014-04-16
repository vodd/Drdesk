<?php

class ClientController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
			$all = Client::all();
			return View::make('client.index')->with('all',$all);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(){
		return View::make('client.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(){
			$client = New Client;

			
			$client->name = Input::get('name');		
			$client->firstname = Input::get('firstname');		
			$client->age = Input::get('age');		
			$client->address = Input::get('address');		
			$client->professtion = Input::get('professtion');		
			$client->tel = Input::get('tel');			
			$client->sexe = Input::get('sexe');			
			$client->lieunais = Input::get('lieunais');			
			$client->namewo = Input::get('namewo');	
			$client->diag = Input::get('diag');			
			$client->thare = Input::get('thare');			
			$client->save();

			return Redirect::to('client/'.$client->id);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id){
		$client = Client::find($id);
		$orda = Client::find($id)->posts;
		return View::make('client.show')
			->with('title',$client->name)
			->with('client',$client)
			->with('orda',$orda);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($client_id){
		$client = Client::find($client_id);
		return View::make('client.edit')->with('client',$client);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$client = Client::find($id);

			$client->name = Input::get('name');		
			$client->firstname = Input::get('firstname');		
			$client->age = Input::get('age');		
			$client->address = Input::get('address');		
			$client->professtion = Input::get('professtion');		
			$client->tel = Input::get('tel');			
			$client->sexe = Input::get('sexe');			
			$client->lieunais = Input::get('lieunais');			
			$client->email = Input::get('email');			
			$client->namewo = Input::get('namewo');			
			$client->diag = Input::get('diag');			
			$client->thare = Input::get('thare');			
			$client->save();

			return Redirect::to('client/'.Input::get('id'));
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
?>
