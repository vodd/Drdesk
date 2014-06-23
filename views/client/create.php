@extends('layouts.main')

@section('content')	
	
		{{Form::open(array('url'=>'client','class'=>'form-horizontal'))}}		
		<div class="form-group">	
				{{Form::label('name','Nom :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('name')}}
		</div>
		<div class="form-group">
				{{Form::label('firstname','Prenom :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('firstname')}}
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
				{{Form::textarea('address')}}
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
				{{Form::label('email','Email :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('email')}}
		</div>
		<div class="form-group">
			{{Form::submit('Enregistré',array('class'=>'btn'))}}			
		</div>
		{{Form::close()}}

@stop
