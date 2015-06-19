@extends('register.index')

@section('content')

	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2>Biodata Pribadi</h2>
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
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Tempat Lahir</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column">
					 {!! Form::label($app->place_birth) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Tanggal Lahir</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column">
					 {!! Form::label($date_birth) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Jumlah Hafalan Al-Quran</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->recitation) !!}&nbsp;&nbsp;<b>Juz</b>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Buta Warna</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($app->color_blind == 1) ? 'Ya' : 'Tidak') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Riwayat Gangguan Mental</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($app->mental_disorder == 1) ? 'Ya' : 'Tidak') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Penyakit yang sedang/pernah diderita</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->illness) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-4 column">
					<div class="row clearfix">
						<div class="col-md-4 column">
							 <p>Golongan Darah</p>
						</div>
						<div class="col-md-1 column text-right">
							 <p>:</p>
						</div>
						<div class="col-md-6 column">
							 {!! Form::label($app->blood_type) !!}
						</div>
					</div>
				</div>
				<div class="col-md-4 column">
					<div class="row clearfix">
						<div class="col-md-4 column">
							 <p>Berat Badan</p>
						</div>
						<div class="col-md-1 column text-right">
							 <p>:</p>
						</div>
						<div class="col-md-6 column form-inline">
							 {!! Form::label($app->weight) !!}&nbsp;&nbsp;Kg
						</div>
					</div>
				</div>
				<div class="col-md-4 column">
					 <div class="row clearfix">
						<div class="col-md-4 column">
							 <p>Tinggi</p>
						</div>
						<div class="col-md-1 column text-right">
							 <p>:</p>
						</div>
						<div class="col-md-6 column">
							 {!! Form::label($app->height) !!}&nbsp;&nbsp;Cm
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Telepon yang bisa dihubungi</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->contact) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Data Keluarga</h2><hr />
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
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pendidikan Terakhir</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->educationLevel->level_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pekerjaan Ayah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->jobType->job_name) !!}
				</div>
			</div>

			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nama Ibu Kandung</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column">
					 {!! Form::label($app->family->mother_name) !!}
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
					 {!! Form::label($app->family->mother_age) !!}&nbsp; <b>Tahun</b>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pendidikan Terakhir</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->educationLevelIbu->level_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pekerjaan Ibu</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->jobTypeIbu->job_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Peghasilan Ortu/wali</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->rangeSalary->range_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Alamat Ortu/wali</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->address) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nomor Telepon</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->family->father_contact) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Asal Pesantren</h2><hr />
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
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>NSPP</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->pesantren->nspp) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Alamat</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->pesantren->pesantren_address) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>No. Telepon Pondok</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->pesantren->pesantren_contact) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Asal Sekolah</h2><hr />
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
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Nama Kepala Sekolah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->school_principal_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Status Sekolah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($app->school_status == 1) ? 'Negeri' : 'Swasta') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Jurusan</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->programStudy->program_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Tahun Lulus</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->graduate_year) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Alamat</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->school_address) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Telp. Sekolah</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->school->school_contact) !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Pilihan Perguruan Tinggi</h2><hr />
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
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pilihan Jurusan 1</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->application->departement->departement_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Pilihan Jurusan 2</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($app->application->departement2->departement_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">
					 <p>Bersedia untuk dipindahkan Jurusan</p>
				</div>
				<div class="col-md-1 column text-right">
					 <p>:</p>
				</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($app->application->aggree_to_auto_move == 1) ? 'Bersedia' : 'Tidak Bersedia') !!}
				</div>
			</div>
		</div>
	</div>


@stop