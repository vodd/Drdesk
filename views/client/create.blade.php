@extends('layouts.main')

@section('content')	
		<h2>Ajouter un nouveau patient :</h2>
		{{Form::open(array('url'=>'client','class'=>'form-horizontal'))}}
		<div class="form-group">
				{{Form::label('firstname','Nom :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('firstname')}}
		</div>		
		<div class="form-group">	
				{{Form::label('name','Prenom :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('name')}}
		</div>
		<div class="form-group">
				{{Form::label('age','Age :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('age')}}
		</div>
		<div class="form-group">
				{{Form::label('sexe','Sexe :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::select('sexe', array('M' => 'Homme', 'F' => 'Femme'))}}
		</div>
		<div class="form-group">
				{{Form::label('address','Address :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('address')}}
		</div>
		<div class="form-group">
				{{Form::label('lieunais','Lieu de naiss :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('lieunais')}}
		</div>
		<div class="form-group">
				{{Form::label('professtion','Profession :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('professtion')}}
		</div>
		<div class="form-group">
				{{Form::label('tel','Telephone :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('tel')}}
		</div>
		<div class="form-group">
				{{Form::label('namewo','Nom J.fille :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('namewo')}}
		</div>
		<div class="form-group">
				{{Form::label('diag','Diagnostique :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::textarea('diag')}}
		</div>
		<div class="form-group">
				{{Form::label('thare','Tares :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('thare')}}
		</div>
		<div class="form-group">
			{{Form::submit('Enregistré',array('class'=>'btn'))}}			
		</div>
		{{Form::close()}}

@stop
