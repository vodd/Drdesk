@extends('layouts.main')

@section('content')
<br>
  {{HTML::link('product/create','Ajoute un medicament',array('class'=>'btn btn-primary'))}}
<table class="table">
      <thead>
        <tr>
          <th>Nom</th>
          <th>Description</th>
          <th>Boites</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      	@foreach($prd as $k)
        <tr>
          <td>{{$k->name}}</td>
          <td>{{$k->applic}}</td>
          <td>{{$k->bt}}</td> 
          <td>{{HTML::link('product/'.$k->id.'/edit','Modifier')}}</td>         
        </tr>
		@endforeach
      </tbody>
    </table>
    {{$prd->links()}}

	</div></div>
@stop