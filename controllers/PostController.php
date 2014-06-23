<?php

class PostController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(){
		$consult = Post::get('all')->clients;
		//$consult = Post::orderBy('id','desc')->get();

		return View::make('post.index')
				->with('title','Liste de medicament')
				->with('consult',$consult);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function add($id,$client_id){
		$client = Client::find($client_id);
		$list = Post::find($id)->product;
		$post = Post::find($id);
		$med = Product::all()->toJson();

		return View::make('post.add')
				->with('title','Nouvel visite')
				->with('client',$client)
				->with('med',$med)
				->with('list',$list)
				->with('id',$id)
				->with('post',$post);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function save($id)
	{
			$orda = New Post;
			$orda->client_id = $id;
			$orda->save();

			return Redirect::to('post/add/'.$orda->id.'/'.$orda->client_id);

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id){
		$visite = Post::find($id);
		$med = Post::find($id)->product;

		return View::make('post.show')
			->with('title',$visite->name)
			->with('visite',$visite)
			->with('med',$med);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($client_id){
		$visite = Client::find($client_id);
		$med = Product::all();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id){
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

	public function medic($post_id,$product_id){
		$orda = Post::find($post_id);

		$orda->Product()->attach($post_id,array('product_id'=>$product_id));

		return Redirect::to('post/add/'.$post_id.'/'.$orda->client_id)->with('message','Medicament Ajoutée');

	}

	public function medicdel($post_id,$product_id){
		$orda = Post::find($post_id);

		$orda->Product()->detach($product_id);

		return Redirect::to('post/add/'.$post_id.'/'.$orda->client_id)->with('message','Medicament supprimée');
	}


	public function printma($id,$client_id){
		 $client = Client::find($client_id);
		 $med = Post::find($id)->product;
		 $prd = Post::find($id);
		 $pdf = App::make('dompdf');
		 $pdf->loadView('post.printma',array('mee'=>$med,'client'=>$client,'prd'=>$prd))->setPaper('A5');
		 return $pdf->stream();
		return View::make('post.printma')->with('mee',$med);
	}
}
