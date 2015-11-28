@extends('register.index')

@section('content')
	<h2>Nilai Rapor</h2>
	<hr />
		@if ($errors->any())
			<ul class="alert alert-danger">
					{{ $errors->first() }}
			</ul>
		@endif
	{!! Form::model($raports,['method' => 'PATCH','url' => ['/raports']]) !!}
		@include ('raport.form', ['text' => 'Selanjutnya'])
	{!! Form::close() !!}
@stop
