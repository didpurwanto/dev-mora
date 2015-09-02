@extends('layout')

@section('content')
	<h2>Daftar Program Studi</h2>
	@foreach ($programs as $program)
		<article>
			<h3>{{ $program->program_name }}</h3>
			<h3>{{ $program->list_subject }}</h3>

		</article>
	@endforeach
@stop
