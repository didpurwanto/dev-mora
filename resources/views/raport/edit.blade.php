@extends('layout')

@section('content')
	<h2>Nilai Rapor</h2>
	<hr />
	
	{!! Form::model($raports,['method' => 'PATCH','url' => ['/raports',$raports->id]]) !!}
		@include ('raport.form', ['text' => 'Simpan'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop