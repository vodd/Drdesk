@extends('layouts.main')

@section('content')
<br>
<h2>Ajouter un medicament</h2>
	{{Form::open(array('url'=>'product','class'=>'form-horizontal'))}}
		<div class="form-group">	
				{{Form::label('name','Nom :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('name')}}
		</div>
		<div class="form-group">
				{{Form::label('applic','Description :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('applic')}}
		</div>
		<div class="form-group">
				{{Form::label('bt','Boite :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('bt')}}
		</div>
		{{Form::submit('Enregistré',array('class'=>'btn'))}}	
	{{Form::close()}}
	<br>
@stop