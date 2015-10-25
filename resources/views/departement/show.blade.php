@extends('layout')

@section('content')
	<h2>Daftar Departement</h2>
	<hr />
	<article>{{ $dep->university_name }}</article>
	<article>{{ $dep->departement_name }}</article>
@stop