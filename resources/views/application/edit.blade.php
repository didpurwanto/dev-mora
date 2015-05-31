@extends('layout')

@section('content')
	<h2>Pilihan Jurusan</h2>
	<hr />
	
	{!! Form::model($appl,['method' => 'PATCH','url' => ['/applications',$appl->id]]) !!}
		@include ('application.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop