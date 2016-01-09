@extends('register.index')

@section('content')
	<h2>Data Pesantren</h2>
	<hr />

	{!! Form::model($pes,['method' => 'PATCH','url' => ['/pesantrens']]) !!}
		@include ('pesantren.form', ['text' => 'Selanjutnya'])
	{!! Form::close() !!}

@stop
