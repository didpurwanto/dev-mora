@extends('layout')

@section('content')
	<h2>Membuat Pengguna Baru</h2>
	<hr />

	{!! Form::open(['url' => '/users']) !!}
		@include('user.form', ['text' => 'Simpan'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
