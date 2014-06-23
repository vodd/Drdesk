@extends('layouts.main')

@section('content')

	{{ Form::model($user, array('route' => array('user.update', $user->id), 'method' => 'PUT')) }}
		<div class="form-group">	
				{{Form::label('username','Nom :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('username')}}
		</div>
		<div class="form-group">
				{{Form::label('password','password :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::password('password')}}
		</div>
		{{Form::submit('Enregistré',array('class'=>'btn'))}}	
	{{Form::close()}}
	<br>
@stop