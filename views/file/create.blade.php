@extends('layouts.main')

@section('content')

  {{Form::open(array('url'=>'file/create/'.$client->id,'files' => true))}}
    {{Form::file('src')}}
    {{Form::submit('upload')}}
  {{Form::close()}}
@stop
