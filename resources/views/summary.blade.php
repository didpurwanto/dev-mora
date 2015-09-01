@extends('register.index')

@section('content')

	<div class="row clearfix">
		<div class="col-md-12 column">
			<h2>Biodata Pribadi</h2>
			<hr />
			<div class="row clearfix">
				<div class="col-md-2 column">Nama Lengkap</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column">
					 {!! Form::label($user->applicant->full_name ) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Jenis Kelamin				</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column">
					 {!! Form::label(($user->applicant->gender == 1) ? 'Laki-laki' : 'Perempuan') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Tempat Lahir				</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column">
					 {!! Form::label($user->applicant->place_birth) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Tanggal Lahir</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column">
					 {!! Form::label($date_birth) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Hafalan Al-Quran</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->applicant->recitation) !!}&nbsp;&nbsp;<b>Juz</b>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Buta Warna</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($user->applicant->color_blind == 1) ? 'Ya' : 'Tidak') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Gangguan Mental</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($user->applicant->mental_disorder == 1) ? 'Ya' : 'Tidak') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Riwayat Penyakit</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->applicant->illness) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-6 column">
					<div class="row clearfix">
						<div class="col-md-5 column">Golongan Darah</div>
						<div class="col-md-1 column text-right">:</div>
						<div class="col-md-2 column">
							 {!! Form::label($user->applicant->blood_type) !!}
						</div>
					</div>
				</div>
				<div class="col-md-3 column">
					<div class="row clearfix">
						<div class="col-md-5 column">Berat Badan</div>
						<div class="col-md-1 column text-right">:</div>
						<div class="col-md-4 column form-inline">
							 {!! Form::label($user->applicant->weight) !!}&nbsp;&nbsp;Kg
						</div>
					</div>
				</div>
				<div class="col-md-3 column">
					 <div class="row clearfix">
						<div class="col-md-5 column">Tinggi Badan</div>
						<div class="col-md-1 column text-right">:</div>
						<div class="col-md-5 column">
							 {!! Form::label($user->applicant->height) !!}&nbsp;&nbsp;Cm
						</div>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Nomor Telepon</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->applicant->contact) !!}
				</div>
			</div>
		</div>
	</div>


	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Data Keluarga</h2>
			<hr />
			<div class="row clearfix">
				<div class="col-md-2 column">Nama Ayah Kandung</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column">
					 {!! Form::label($user->family->father_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Umur</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->father_age) !!}&nbsp; <b>Tahun</b>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pendidikan Terakhir</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->educationLevel->level_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pekerjaan Ayah</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->jobType->job_name) !!}
				</div>
			</div>

			<div class="row clearfix">
				<div class="col-md-2 column">Nama Ibu Kandung</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column">
					 {!! Form::label($user->family->mother_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Umur</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->mother_age) !!}&nbsp; <b>Tahun</b>
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pendidikan Terakhir</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->educationLevelIbu->level_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pekerjaan Ibu</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->jobTypeIbu->job_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Peghasilan Ortu/wali</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->rangeSalary->range_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Alamat Ortu/wali</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->address) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Nomor Telepon</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->family->father_contact) !!}
				</div>
			</div>
		</div>
	</div>

	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Asal Pesantren</h2><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">Nama Pesantren</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->pesantren->pesantren_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pimpinan Pondok Pesantren</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->pesantren->kiai_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">NSPP</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->pesantren->nspp) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Alamat</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->pesantren->pesantren_address) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">No. Telepon Pondok</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->pesantren->pesantren_contact) !!}
				</div>
			</div>
		</div>
	</div>


	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Asal Madrasah/Sekolah</h2><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">Nama Sekolah</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->school_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Jenis Sekolah</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->schoolType->type_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Nama Ka. Sekolah</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->school_principal_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Status Sekolah</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($user->school_status == 1) ? 'Negeri' : 'Swasta') !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Jurusan</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->programStudy->program_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Tahun Lulus</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->graduate_year) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Alamat</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->school_address) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Telp. Sekolah</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->school->school_contact) !!}
				</div>
			</div>
		</div>
	</div>


	<div class="row clearfix">
		<div class="col-md-12 column">
			<br />
			<h2>Pilihan Perguruan Tinggi</h2><hr />
			<div class="row clearfix">
				<div class="col-md-2 column">Nama Universitas</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->application->university->university_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pilihan Jurusan 1</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->application->departement->departement_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Pilihan Jurusan 2</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label($user->application->departement2->departement_name) !!}
				</div>
			</div>
			<div class="row clearfix">
				<div class="col-md-2 column">Bersedia Pindah Jurusan</div>
				<div class="col-md-1 column text-right">:</div>
				<div class="col-md-6 column form-inline">
					 {!! Form::label(($user->application->aggree_to_auto_move == 1) ? 'Bersedia' : 'Tidak Bersedia') !!}
				</div>
			</div>
		</div>
	</div>



@stop
