@extends('layouts.main')
@section('content')
	<table class="table">
      <thead>
        <tr>
          <th>Nom & Prenom</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
       @foreach($consult as $k)
        <tr>
          <td>{{$k->firstname}} {{$k->name}}</td>
          <td>{{HTML::link('client/'.$k->id,'voir')}}</td>
        </tr>
    @endforeach
      </tbody>
    </table>
@stop

