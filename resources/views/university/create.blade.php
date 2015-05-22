@extends('layout')

@section('content')
	<h2>Create A New University</h2>
	<hr />
	
	{!! Form::open(['url' => '/universities']) !!}
		@include('university.form', ['text' => 'Save'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop