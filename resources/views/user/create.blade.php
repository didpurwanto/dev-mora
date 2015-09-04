@extends('layout')

@section('content')
	<h2>Create A New User</h2>
	<hr />

	{!! Form::open(['url' => '/users']) !!}
		@include('user.form', ['text' => 'Simpan'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
