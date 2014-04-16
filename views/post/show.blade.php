@extends('layouts.main')

@section('content')
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="container">
	<h5>Date de la visite </h5>
	{{$visite->created_at}}
	@foreach($med as $v) 	
		<h5>{{$v->name}} </h5>
	@endforeach
	</div></div>
	

@stop

	