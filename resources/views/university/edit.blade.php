@extends('layout')

@section('content')
	<h2>Edit University Name</h2>
	<hr />
	
	{!! Form::model($univ,['method' => 'PATCH','url' => ['/universities',$univ->id]]) !!}
		@include ('university.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop