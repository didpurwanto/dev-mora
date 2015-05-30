@extends('layout')

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />
	
	{!! Form::model($app,['method' => 'PATCH','url' => ['/applicants',$app->id]]) !!}
		@include ('applicant.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop