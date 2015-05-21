@extends('layout')

@section('content')
	@foreach ($univ as $university)
		<h2>Ini adalah Halaman Universitas</h2>
		<article>
			<h3>{{ $university->university_name }}</h3>
		</article>
	@endforeach
@stop