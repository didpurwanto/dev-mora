@extends('layout')

@section('content')
	<h2>Edit University Name</h2>
	<hr />
	
	{!! Form::model($app,['method' => 'PATCH','url' => ['/applicants',$app->id]]) !!}
		@include ('applicant.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop