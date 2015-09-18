@extends('admin.index')

@section('content')
	<h2>Merubah Universitas Mitra Kerja Sama</h2>
	<hr />

	{!! Form::model($univ,['method' => 'PATCH','url' => ['/universities',$univ->id]]) !!}
		@include ('university.form', ['text' => 'Update'])
	{!! Form::close() !!}

	@include('errors.list')
@stop
