@extends('layout')

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />
	
	{!! Form::open(['url' => '/applicants']) !!}
		@include('applicant.form', ['text' => 'Save'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop