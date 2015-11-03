@extends('admin.index')

@section('content')
	<h2>Daftar Universitas</h2>
	<hr />
	<article>{{ $univ->university_name }}</article>
@stop
