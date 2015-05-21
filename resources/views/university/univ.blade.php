@extends('layout')

@section('content')
	@foreach ($univ as $university)
	<h1>Ini adalah Halaman Universitas</h1
	<article>
		<h3>{{ $university->university_name }}</h3>
	</article>
	@endforeach
@stop