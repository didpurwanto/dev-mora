@extends('layout')

@section('content')
	<h2>Create A New University</h2>
	<hr />
	
	{!! Form::open(['url' => '/univ']) !!}
		<div class="form-group">
			{!! Form::label('university_name', 'Nama Universitas :') !!}
			{!! Form::text('university_name',null, ['class' => 'form-control']) !!}
		</div>
		
		<div class="form-group">
			{!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
		</div>
	{!! Form::close() !!}
	
	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif
@stop