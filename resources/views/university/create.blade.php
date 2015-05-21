@extends('layout')

@section('content')
	<h2>Create A New University</h2>
	<hr />
	
	{!! Form::open(['url' => '/univ']) !!}
		<div class="form-group">
			{!! Form::label('university', 'Nama Universitas :') !!}
			{!! Form::text('university_name',null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
@stop