@extends('admin.index')

@section('content')
	<h2>Daftar Departemen</h2>
	@foreach ($dep as $depart)
		<article>
			<h3>{{ $depart->departement_name }} In {{ $depart->getUniversityName() }}</h3>

		</article>
	@endforeach
@stop
