<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function(){
    return View::make('connexion');
});
Route::resource('client','ClientController');
Route::resource('post','PostController');
Route::resource('product','ProductController');
Route::resource('user','UsersController');
Route::get('/post/add/{id}/{client_id}','PostController@add');
Route::get('/post/save/{id}','PostController@save');
Route::get('/post/medic/{post_id}/{product_id}','PostController@medic');
Route::post('/post/medic/{post_id}/{product_id}','PostController@medic');
Route::get('/post/medicdel/{post_id}/{product_id}','PostController@medicdel');
Route::post('/post/medicdel/{post_id}/{product_id}','PostController@medicdel');
Route::get('/post/printma/{id}/{client_id}','PostController@printma');

Route::post('connexion', function()
{
    $nom = Input::get('nom');
    $passe = Input::get('password');

    if(Auth::attempt(array('username' => $nom, 'password' => $passe)))
        return Redirect::to('client');
    else
        echo 'Echec de la connexion';
});
// Route::get('user.logout',function(){
//     Auth::logout();
//     return Redirect::to('/');
// });
Route::post('search',function(){
	$search = Input::get('search');

	$client = Client::where('firstname','LIKE','%'.$search.'%')->get();
	return View::make('search')->with('client',$client);
	//$client = Response::json($client);

	//var_dump($client);
 });
Route::get('rapport/{client_id}',function($client_id = 'client_id'){
    $client = Client::find($client_id);
    $pdf = App::make('dompdf');
    $pdf->loadView('rapport',array('client' =>$client))->setPaper('A5');
    return $pdf->stream();
    return View::make('rapport')->with('client',$client);
});
Route::get('certi/{client_id}',function($client_id = 'client_id'){
    $client = Client::find($client_id);
    $pdf = App::make('dompdf');
    $pdf->loadView('certi',array('client' =>$client))->setPaper('A5');
    return $pdf->stream();
    return View::make('certi')->with('client',$client);
});
Route::get('/calandar', function(){
    return View::make('calandar');
});

Route::get('/result/create/{client_id}','ResultController@create');
Route::post('/result/store/{client_id}','ResultController@store');
Route::get('/result/{id}/{client_id}','ResultController@show');
Route::get('/client/add/{id}','ClientController@add');
Route::post('/client/save/{id}','ClientController@save');
Route::get('/eco/create/{client_id}','EcoController@create');
Route::post('/eco/store/{client_id}','EcoController@store');
Route::get('/eco/{id}/{client_id}','EcoController@show');
Route::get('/file/create/{client_id}','FileController@create');
Route::post('/file/create/{client_id}','FileController@create');
