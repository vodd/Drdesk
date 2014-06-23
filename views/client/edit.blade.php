@extends('layouts.main')

@section('content')
	    @if(Session::has('message'))
        <div class="alert alert-success">{{Session::get('message')}}</div>
    @endif
		<h2>Modification des informations :</h2>
	{{ Form::model($client, array('route' => array('client.update', $client->id), 'method' => 'PUT')) }}
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
				{{Form::text('diag')}}
		</div>
		<div class="form-group">
				{{Form::label('thare','Tares :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('thare')}}
		</div>

		<div id="hna" class="form-group">
				{{Form::label('TA','TA :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('TA')}}
		</div>
		<div class="form-group">
				{{Form::label('FC','FC :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('FC')}}
		</div>
		<div class="form-group">
				{{Form::label('poids','poids :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('poids')}}
		</div>
		<div class="form-group">
				{{Form::label('ecg','ecg :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('ecg')}}
		</div>
		<div class="form-group">
				{{Form::label('SF','SF :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('SF')}}
		</div>
		<div class="form-group">
				{{Form::label('Sp','Sp :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('Sp')}}
		</div>
		<div class="form-group">
				{{Form::label('soin','soin :',array('class'=>'col-sm-2 control-label'))}}
				{{Form::text('soin')}}
		</div>
		<div class="form-group">
			{{Form::submit('Enregistré',array('class'=>'btn'))}}
		</div>
		{{Form::close()}}
@stop
