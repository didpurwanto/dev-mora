@extends('layout')

@section('content')
	<h2>Biodata Keluarga</h2>
	<hr />
	
	{!! Form::open(['url' => '/families']) !!}
		@include('family.form', ['text' => 'Save'])
	{!! Form::close() !!}
	@include('errors.list')
@stop