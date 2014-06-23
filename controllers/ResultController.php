<?php

class ResultController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($id)
	{

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($client_id)
	{
		$client = Client::find($client_id);
		return View::make('result.create')
				->with('client',$client);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($client_id)
	{
		$result = New Result;
		//var_dump(Input::get('result'));
		$res = Input::get('result');
		$res_lenght = count($res);

		for($i = 0;$i<$res_lenght;$i++){
			$result->result .= $res[$i];

		}

		$result->client_id = $client_id;

	  $result->save();

		return Redirect::to('/result/'.$result->id.'/'.$client_id);

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
		$result = Result::find($id);
		return View::make('result.show')
				->with('client',$client)
				->with('results',$result);
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
