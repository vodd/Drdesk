<?php

class EcoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($client_id)
	{
		$client = Client::find($client_id);
		return View::make('eco.create')->with('client',$client);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($client_id)
	{
		$eco = NEW Eco();
		$eco->text = Input::get('text');
		$eco->client_id = $client_id;

		$eco->save();
		return Redirect::to('client/'.$client_id);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id,$client_id)
	{
		$client = Client::find($client_id);
		$eco = Eco::find($id);

		return View::make('eco.show')
				->with('client',$client)
				->with('eco',$eco);
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
