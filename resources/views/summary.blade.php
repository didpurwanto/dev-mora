@extends('register.index')

@section('css')
		{!! Html::style('css/summarycss.css') !!}
@stop

@section('content')
<table style="font-family:arial,helvetica,sans-serif;">
	<tr align="center">
		<td>
			<b><font size="5 px">RANGKUMAN DATA CALON PESERTA PBSB</font></b>
			<b><font size="5 px"> TAHUN {{ date('Y')}} </font></b>
		</td>
	</tr>
</table>
<hr>
<table>
	<tr>
		<td width="400px">
			<font size="4 px">Nama : <b>{!! $user->applicant->full_name !!}</b></font> </br>
			Jenis Kelamin : <b>{!! ($user->applicant->gender == 1) ? 'Laki-laki' : 'Perempuan' !!}</b> </br>
			Tempat/Tanggal Lahir : <b>{!! $user->applicant->place_birth !!} / {!! $date_birth  !!}</b> </br>
			Penyakit yang sedang/pernah diderita:  </br>
			<b>{!! $user->applicant->illness !!}</b><br />
			<br />
			Buta Warna : <b>{!! ($user->applicant->color_blind == 1) ? 'Ya' : 'Tidak' !!}</b> </br>
			Gol. Darah <b>{!! $user->applicant->blood_type !!}</b> Berat <b>{!! $user->applicant->weight !!}</b> Kg Tinggi <b>{!! $user->applicant->height !!}</b> cm </br>
			Riwayat Gangguan Mental : <b>{!! ($user->applicant->mental_disorder == 1) ? 'Ya' : 'Tidak' !!}</b> </br>
			Hafalan Al-Qurran : <b>{!! $user->applicant->recitation !!}</b> Juz </br>
			No Telp yang Bisa Dihubungi : <b>{!! $user->applicant->contact !!}</b> </br>
		</td>
	</tr>
</table>
<hr>
<table>
	<tr>
		<td width="200px">
			Anak Ke <b>{!!$user->family->anak_ke !!}</b> Dari <b>{!!$user->family->saudara !!}</b> Bersaudara
		</td>
		<td  width="10px">&nbsp
		</td>
		<td  width="200px">
		</td>
		<td  width="100px">
		</td>
		<td  width="190px">
		</td>
	</tr>
	<tr>
		<td>
			Ayah Kandung
		</td>
		<td>:
		</td>
		<td><b>{!!($user->family->father_deceased == 1) ? 'Alm. ' : ''!!}{!!$user->family->father_name !!}</b>
		</td>
		<td >Umur <b>{!!$user->family->father_age!!} </b> Tahun
		</td>
		<td >Pekerjaan : <b>{!!$user->family->jobType->job_name!!}</b> </br>
		Pendidikan Terakhir : <b>{!!$user->family->educationLevel->level_name!!}</b> </br>
		</td>
	</tr>
	<tr>
		<td>
			Ibu Kandung
		</td>
		<td>:
		</td>
		<td><b>{!!($user->family->mother_deceased == 1) ? 'Almh. ' : ''!!}{!!$user->family->mother_name !!}</b>
		</td>
		<td >Umur <b>{!!$user->family->mother_age!!}</b> Tahun
		</td>
		<td >Pekerjaan : <b>{!!$user->family->jobTypeIbu->job_name!!}</b> </br>
		Pendidikan Terakhir : <b>{!!$user->family->educationLevelIbu->level_name!!}</b> </br>
		</td>
	</tr>
	<tr>
		<td>
			Penghasilan Orang Tua/Wali
		</td>
		<td>:
		</td>
		<td><b>{!!$user->family->rangeSalary->range_name!!}</b>
		</td>
	</tr>
	<tr>
		<td>
			Alamat Orang Tua/Wali
		</td>
		<td>:
		</td>
		<td><b>{!!$user->family->address!!}</b> </br>
			Kel./Desa : <b>{!!$user->family->kelurahan!!}</b> </br>
			Kecamatan : <b>{!!$user->family->kecamatan!!}</b> </br>
			Kab./Kota : <b>{!!$user->family->kabupaten!!}</b> </br>
			Provinsi  : <b>{!!$user->family->province->province_name!!}</b>
		</td>
	</tr>
</table>

<hr>

<table>
	<tr>
		<td width="200px">
			Asal Pondok Pesantren
		</td>
		<td width="10px">:
		</td>
		<td width="290px"><b>{!!$user->pesantren->pesantren_name!!}</b>
		</td>
		<td width="200px" align="right">
			NSPP : <b>{!!$user->pesantren->nspp!!}</b>
		</td>

	</tr>
	<tr>
		<td>
			Alamat Pondok Pesantren
		</td>
		<td>:
		</td>
		<td><b>{!!$user->pesantren->pesantren_address!!}</b> </br>
			Kel./Desa : <b>{!!$user->pesantren->kelurahan!!}</b> </br>
			Kecamatan : <b>{!!$user->pesantren->kecamatan!!}</b> </br>
			Kab./Kota : <b>{!!$user->pesantren->kabupaten!!}</b> </br>
			Provinsi  : <b>{!!$user->pesantren->province->province_name!!}</b>
		</td>
	</tr>
	<tr>
		<td>
			Nama Pimpinan PP
		</td>
		<td>:
		</td>
		<td><b>{!!$user->pesantren->kiai_name!!}</b> </br>
		</td>
	</tr>
	<tr>
		<td>
			No Telp PP
		</td>
		<td>:
		</td>
		<td><b>{!!$user->pesantren->no_telp!!}</b> </br>
		</td>
	</tr>
</table>

<hr>

<table>
	<tr>
		<td width="200px">
			Asal Sekolah
		</td>
		<td width="10px">:
		</td>
		<td width="200px"><b>{!!$user->school->school_name!!}</b>
		</td>
		<td width="50px">
			Jenis</br>
			Lokasi
		</td>
		<td width="10px">:</br>
		:
		</td>
		<td width="80px"><b>{!!$user->school->schoolType->type_name!!}</b></br>
		<b>{!!($user->school->inside_pondok == 1) ? 'DIDALAM' : 'DILUAR'!!}</b>
		</td>
		<td width="50px">
			Status</br>
			NISN
		</td>
		<td width="10px">:</br>
		:
		</td>
		<td width="80px"><b>{!!($user->school->school_status == 1) ? 'NEGERI' : 'SWASTA'!!}</b></br>
		<b>{!!$user->school->nisn!!}</b>
		</td>
	</tr>
	<tr>
		<td>
			Alamat Sekolah
		</td>
		<td>:
		</td>
		<td><b>{!!$user->school->school_address!!}</b> </br>
			Kel./Desa : <b>{!!$user->school->kelurahan!!}</b> </br>
			Kecamatan : <b>{!!$user->school->kecamatan!!}</b> </br>
			Kab./Kota : <b>{!!$user->school->kabupaten!!}</b> </br>
			Provinsi  : <b>{!!$user->school->province->province_name!!}</b>
		</td>
	</tr>
	<tr>
	<tr>
		<td>
			Nama Kepala Sekolah
		</td>
		<td>:
		</td>
		<td><b>{!!$user->school->school_principal_name!!}</b> </br>
		</td>
	</tr>
	<tr>
		<td>
			No Telp Sekolah
		</td>
		<td>:
		</td>
		<td><b>{!!$user->school->no_telp!!}</b></br>
		</td>
	</tr>
</table>

<hr>
<table>
	<tr>
		<td width="200px">Pilihan Perguruan Tinggi</td>
		 <td width="10px">:</td>
		 <td width="390px"><b>{!!$user->application->university->university_name!!}</b></td>
	</tr>
	<tr>
		<td width="200px">Pilihan Jurusan 1 <b></b>
		</td>
		<td width="10px">:</td>
		<td width="390px"><b>{!!$user->application->departement->departement_name!!}</b></td>
		<td align="right" width="100px">(Kode - <b>{!!$user->application->departement->departement_code!!}</b>)
		</td>
	</tr>
	<tr>
		<td>Pilihan Jurusan 2 <b></b>
		</td>
		<td>:</td>
		<td width="390px"><b>{!!$user->application->departement2->departement_name!!}</b></td>
		<td align="right" width="100px">(Kode - <b>{!!$user->application->departement->departement_code!!}</b>)
		</td>
	</tr>
	<tr>
		<td>
			Bersedia untuk dipindah Jurusan
		</td>
		<td>:</td>
		<td><b>{!!($user->application->aggree_to_auto_move == 1) ? 'YA' : 'TIDAK'!!}</b></td>
	</tr>
</table>

<hr>
<table border="1">
	<tr align="center" >
		<td rowspan="2" width="200">Mata Pelajaran
		</td>
		<td colspan="2">Kelas I
		</td>
		<td colspan="2">Kelas II
		</td>
		<td colspan="2">Kelas III
		</td>
	</tr>
	<tr  align="center">
		<td width="80">Sem I
		</td>
		<td width="80">Sem II
		</td>
		<td width="80">Sem III
		</td>
		<td width="80">Sem IV
		</td>
		<td width="80">Sem V
		</td>
		<td width="80">Sem VI
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp{{ $listSubjects[0] }}
		</td>
		<td width="80"><b>{{$subject_1[0]}}</b>
		</td>
		<td width="80"><b>{{$subject_1[1]}}</b>
		</td>
		<td width="80"><b>{{$subject_1[2]}}</b>
		</td>
		<td width="80"><b>{{$subject_1[3]}}</b>
		</td>
		<td width="80"><b>{{$subject_1[4]}}</b>
		</td>
		<td width="80"><b>{{$subject_1[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp{{ $listSubjects[1] }}
		</td>
		<td width="80"><b>{{$subject_2[0]}}</b>
		</td>
		<td width="80"><b>{{$subject_2[1]}}</b>
		</td>
		<td width="80"><b>{{$subject_2[2]}}</b>
		</td>
		<td width="80"><b>{{$subject_2[3]}}</b>
		</td>
		<td width="80"><b>{{$subject_2[4]}}</b>
		</td>
		<td width="80"><b>{{$subject_2[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp{{ $listSubjects[2] }}
		</td>
		<td width="80"><b>{{$subject_3[0]}}</b>
		</td>
		<td width="80"><b>{{$subject_3[1]}}</b>
		</td>
		<td width="80"><b>{{$subject_3[2]}}</b>
		</td>
		<td width="80"><b>{{$subject_3[3]}}</b>
		</td>
		<td width="80"><b>{{$subject_3[4]}}</b>
		</td>
		<td width="80"><b>{{$subject_3[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp{{ $listSubjects[3] }}
		</td>
		<td width="80"><b>{{$subject_4[0]}}</b>
		</td>
		<td width="80"><b>{{$subject_4[1]}}</b>
		</td>
		<td width="80"><b>{{$subject_4[2]}}</b>
		</td>
		<td width="80"><b>{{$subject_4[3]}}</b>
		</td>
		<td width="80"><b>{{$subject_4[4]}}</b>
		</td>
		<td width="80"><b>{{$subject_4[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp{{ $listSubjects[4] }}
		</td>
		<td width="80"><b>{{$subject_5[0]}}</b>
		</td>
		<td width="80"><b>{{$subject_5[1]}}</b>
		</td>
		<td width="80"><b>{{$subject_5[2]}}</b>
		</td>
		<td width="80"><b>{{$subject_5[3]}}</b>
		</td>
		<td width="80"><b>{{$subject_5[4]}}</b>
		</td>
		<td width="80"><b>{{$subject_5[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp{{ $listSubjects[5] }}
		</td>
		<td width="80"><b>{{$ranking[0]}}</b>
		</td>
		<td width="80"><b>{{$ranking[1]}}</b>
		</td>
		<td width="80"><b>{{$ranking[2]}}</b>
		</td>
		<td width="80"><b>{{$ranking[3]}}</b>
		</td>
		<td width="80"><b>{{$ranking[4]}}</b>
		</td>
		<td width="80"><b>{{$ranking[5]}}</b>
		</td>
	</tr>
</table>
<br/>
<br/>

@if ($user->finish==0)
	<div class="alert alert-danger">
		<p align="center">Pastikan semua data yang masukan sudah benar. Jika sudah BENAR, silahkan klik FINALISASI DATA SAYA untuk menyimpan secara permanen data anda, data tidak dapat diubah setelah FINALISASI.</p>
	</div>

	<div class="row clearfix">
		<div class="col-md-12 column" align="center">
		{!! Form::open(['method' => 'GET', 'url' => '/finalisasi']) !!}
				{!! Form::submit('FINALISASI DATA SAYA', ['class' => 'btn btn-primary form-button btn-lg']) !!}
		{!! Form::close() !!}
	</div>
	</div>
	<br/>
	<br/>
@endif
@stop
