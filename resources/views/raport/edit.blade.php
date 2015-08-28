@extends('register.index')

@section('content')
	<h2>Nilai Rapor</h2>
	<hr />

	{!! Form::model($raports,['method' => 'PATCH','url' => ['/raports']]) !!}
		@include ('raport.form', ['text' => 'Simpan'])
	{!! Form::close() !!}

	@if ($errors->any())
		<ul class="alert alert-danger">
				<li>{{ $errors->first() }}</li>
		</ul>
	@endif
@stop
