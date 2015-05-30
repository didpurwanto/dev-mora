@extends('layout')

@section('content')
	<h2>Biodata Keluarga</h2>
	<hr />
	
	{!! Form::model($fam,['method' => 'PATCH','url' => ['/families',$fam->id]]) !!}
		@include ('family.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop