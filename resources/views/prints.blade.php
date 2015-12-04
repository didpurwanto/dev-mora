@extends('register.index')

@section('content')

<div class="row clearfix">
	<div class="col-md-12 column">
		<br />
		<br />
		<br />
		<br />
		<br />

		<div class="col-md-5 col-md-offset-1 column">
			{!! Form::open(['method' => 'GET', 'url' => '/cetakformulir']) !!}
    			{!! Form::submit('Cetak Formulir Registrasi', ['class' => 'btn btn-primary form-button btn-lg']) !!}
			{!! Form::close() !!}
		</div>
		<div class="col-md-5 col-md-offset-1 column">
			{!! Form::open(['method' => 'GET', 'url' => '/cetakkartu']) !!}
    			{!! Form::submit('Cetak Kartu Peserta', ['class' => 'btn btn-primary form-button btn-lg']) !!}
			{!! Form::close() !!}
		</div>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<div class="col-md-12 column alert alert-danger">
			<p align="center">Anda secara otomatis akan <b>Keluar/Logout</b> dari aplikasi ketika mencetak <b>Formulir Peserta</b> atau <b>Kartu Peserta</b>.</p>
		</div>
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
	</div>
</div>

@stop
