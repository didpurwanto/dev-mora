@extends('layout')

@section('content')
	<h2>Create A New University</h2>
	<hr />
	
	{!! Form::open() !!}
		<div class="form-group">
			{!! Form::label('university', 'Nama Universitas :') !!}
			{!! Form::text('university',null, ['class' => 'form-control']) !!}
		</div>
	{!! Form::close() !!}
	
@stop