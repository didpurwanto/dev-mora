@extends('layout')

@section('content')
	<h2>Daftar Universitas</h2>
	@foreach ($univ as $university)
		<article>
			<h3>{{ $university->university_name }}</h3>
		</article>
	@endforeach
@stop