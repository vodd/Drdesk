<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prd = Product::orderBy('id','desc')->paginate(10);		

		return View::make('product.index')
				->with('title','Liste de medicament')
				->with('prd',$prd);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('product.create')->with('title','ajouter un medicament');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$prd = New Product;

		$prd->name = Input::get('name');
		$prd->applic = Input::get('applic');
		$prd->bt = Input::get('bt');
		$prd->save();

		return Redirect::to('product');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prd = Product::find($id);
		return View::make('product.edit')->with('prd',$prd);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$prd = Product::find($id);
		$prd->name = Input::get('name');
		$prd->applic = Input::get('applic');
		$prd->bt = Input::get('bt');
		$prd->save();

		return Redirect::to('product');

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