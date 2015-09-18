@extends('admin.index')

@section('content')
	<h2>Create A New Departements</h2>
	<hr />

	{!! Form::open(['url' => '/departements']) !!}
		@include('departement.form', ['text' => 'Save'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
