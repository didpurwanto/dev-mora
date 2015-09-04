@extends('layout')

@section('content')
	<h2>Edit Pengguna</h2>
	<hr />

	{!! Form::model($user,['method' => 'PATCH','url' => ['/users',$user->id]]) !!}
		@include ('user.form', ['text' => 'Update'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
