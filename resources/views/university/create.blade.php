@extends('admin.index')

@section('content')
	<h2>Menambah Universitas Mitra Kerja Sama</h2>
	<hr />

	{!! Form::open(['url' => '/universities']) !!}
		@include('university.form', ['text' => 'Save'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
