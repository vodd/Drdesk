@extends('layouts.main')

@section('content')
<h2>Liste des patiants</h2>
    <table class="table">
      <thead>
        <tr>
          <th>Nom & Prenom</th>
          <th>address</th>
          <th>Age</th>
          <th>Sexe</th>
          <th>Profession</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      @foreach($client as $k)
        <tr>
            <td>{{$k->name}} {{$k->firstname}}</td>
            <td>{{$k->address}}</td>
            <td>{{$k->age}}</td>
            <td>{{$k->sexe}}</td>
            <td>{{$k->professtion}}</td>
      <td>{{HTML::link('client/'.$k->id,'Voir')}}     
            {{HTML::link('client/'.$k->id.'/edit','Modifier')}}</td>
        </tr>
       @endforeach
      </tbody>
    </table>
@stop