@extends('layout')

@section('content')
	<h2>Pilihan Jurusan</h2>
	<hr />
	
	{!! Form::open(['url' => '/applications']) !!}
		@include('application.form', ['text' => 'Save'])
	{!! Form::close() !!}
	@include('errors.list')
@stop