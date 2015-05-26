@extends('layout')

@section('content')
	<h2>Edit Departement Name</h2>
	<hr />
	
	{!! Form::model($dep,['method' => 'PATCH','url' => ['/departements',$dep->id]]) !!}
		@include ('departement.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop