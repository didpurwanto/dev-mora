@extends('layout')

@section('content')
	<h2>Membuat Program Studi Baru</h2>
	<hr />
	
	{!! Form::open(['url' => '/programstudi']) !!}
		@include('programstudi.form', ['text' => 'Save'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
