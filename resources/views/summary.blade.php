@extends('register.index')

@section('content')

	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>Biodata Pribadi</h3>
			<hr />
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nama Lengkap</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column">
					 {!! Form::label($app->full_name ) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Jenis Kelamin</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column">
					 {!! Form::label(($app->gender == 1) ? 'Laki-laki' : 'Perempuan') !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				Data Keluarga
			</h3><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nama Ayah Kandung</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column">
					 {!! Form::label($app->family->father_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Umur</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->father_age) !!}&nbsp; <b>Tahun</b>
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				Asal Pesantren
			</h3><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nama Pesantren</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->pesantren->pesantren_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pimpinan Pondok Pesantren</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->pesantren->kiai_name) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				Asal Sekolah
			</h3><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nama Sekolah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->school_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Jenis Sekolah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->schoolType->type_name) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<h3>
				Pilihan Perguruan Tinggi
			</h3><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Jenis Sekolah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->application->university->university_name) !!}
				</div>
			</div>
		</div>
	</div>


@stop