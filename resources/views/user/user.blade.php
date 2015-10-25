@extends('layout')

@section('content')
	<h2>Daftar Pengguna</h2>
	@foreach ($users as $user)
		<article>
			<h4>{{ $user->username }}</h4>
			<h4>{{ $user->email }}</h4>
			<h4>{{ $user->role }}</h4>
		</article>
	@endforeach
@stop
