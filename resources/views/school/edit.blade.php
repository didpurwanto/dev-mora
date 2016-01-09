@extends('register.index')

@section('content')
	<h2>Data Sekolah</h2>
	<hr />

	{!! Form::model($sch,['method' => 'PATCH','url' => ['/schools']]) !!}
		@include ('school.form', ['text' => 'Selanjutnya'])
	{!! Form::close() !!}

@stop
