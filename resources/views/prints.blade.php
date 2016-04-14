@extends('register.index')

@section('content')

<div class="row clearfix">
	<div class="col-md-12 column">
		<br />
		<br />
		<br />
		<br />
		<br />
	    @if ($pass == 1)
	        <br />
			<div class="col-sm-3 column" >
				{!! Form::open(['method' => 'GET', 'url' => '/cetakformulir']) !!}
	    			{!! Form::submit('Cetak Formulir Registrasi', ['class' => 'btn btn-primary form-button btn-lg']) !!}
				{!! Form::close() !!}
			</div>
			<div class="col-sm-3 col-sm-offset-1 column">
				{!! Form::open(['method' => 'GET', 'url' => '/cetakkartu']) !!}
	    			{!! Form::submit('Cetak Kartu Peserta', ['class' => 'btn btn-primary form-button btn-lg']) !!}
				{!! Form::close() !!}
			</div>
			<div class="col-sm-3 col-sm-offset-1 column">
					<a class="btn btn-primary btn-lg" target="_blank" href="https://drive.google.com/file/d/0BzMpOKBGU7lWQXgxd2hQbmVmLTRjZFk0T21uRkh1VkJyNU9n" role="button">Download Surat Pernyataan</a>
			</div>
	    @endif
	    @if ($pass == 0)
			<div class="col-md-6 col-md-offset-4">
				{!! Form::open(['method' => 'GET', 'url' => '/cetakformulir']) !!}
	    			{!! Form::submit('Cetak Formulir Registrasi', ['class' => 'btn btn-primary form-button btn-lg']) !!}
				{!! Form::close() !!}
			</div>
	    @endif

		<br />
		<br />
		<br />
		<br />
		<br />
		<br />
		<div class="col-md-12 column alert alert-danger">
			<p align="center">Segera <b>Keluar/Logout</b> dari aplikasi setelah selesai mencetak
			<b>Formulir Peserta
			@if ($pass ==1 )
				</b> atau <b>Kartu Peserta</b>
			@endif
			.
			</p>
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
