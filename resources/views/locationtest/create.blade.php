@extends('layout')

@section('content')
	<h2>Pilihan Jurusan</h2>
	<hr />

	{!! Form::open(['url' => '/locationtests']) !!}
		@include('locationtest.form', ['text' => 'Next'])
	{!! Form::close() !!}
	@include('errors.list')
@stop
