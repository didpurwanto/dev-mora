@extends('register.index')

@section('content')
	<h2>Biodata Keluarga</h2>
	<hr />

	{!! Form::model($fam,['method' => 'PATCH','url' => ['/families']]) !!}
		@include ('family.form', ['text' => 'Selanjutnya'])
	{!! Form::close() !!}

@stop
