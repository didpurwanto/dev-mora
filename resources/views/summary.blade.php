@extends('register.index')

@section('css')
		{!! Html::style('css/summarycss.css') !!}
@stop

@section('content')
<table style="font-family:arial,helvetica,sans-serif;">
	<tr>
		<td rowspan="3" width="50px">
			<img src="logo/Kemenag-logo.png" height="50px" width="50px">
		</td>
		<td>&nbsp;&nbsp;</td>
		<td width="440 px">
			<b><font size="3 px">KEMENTERIAN AGAMA RI </font></b></br>
			<b><font size="2 px">Seleksi Calon Peserta Program Beasiswa Santri Berprestasi</font></b> </br>
			<b>Tahun 2016</b>
		</td>
		<td align="right" width="450px">
			<b><font size="5 px" color="red">RANGKUMAN DATA CALON PESERTA</font></b>
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
			Hafalan Al-Qurran : <b>{!! $user->applicant->recitation !!}</b> </br>
			No Telp yang Bisa Dihubungi : <b>{!! $user->applicant->contact !!}</b> </br>
		</td>
	</tr>
</table>
<hr>
<table>
	<tr>
		<td width="200px">
			Anak Ke <b>ISIAN</b> Dari <b>ISIAN</b> Bersaudara
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
		<td><b>{!!$user->family->father_name !!}</b>
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
		<td><b>{!!$user->family->mother_name !!}</b>
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
			Kel./Desa : <b>ISIAN</b> </br>
			Kab./Kota : <b>ISIAN</b> </br>
			Kecamatan : <b>ISIAN</b> </br>
			Provinsi  : <b>ISIAN</b>
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
			Kel./Desa : <b>ISIAN</b> </br>
			Kab./Kota : <b>ISIAN</b> </br>
			Kecamatan : <b>ISIAN</b> </br>
			Provinsi  : <b>ISIAN</b>
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
		<td><b>{!!$user->pesantren->pesantren_contact!!}</b> </br>
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
			Kel./Desa : <b>-</b> </br>
			Kab./Kota : <b>-</b> </br>
			Kecamatan : <b>-</b> </br>
			Provinsi  : <b>ISIAN</b>
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
		<td><b>{!!$user->school->school_contact!!}</b></br>
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
		<td align="right" width="100px">(Kode - <b>ISIAN</b>)
		</td>
	</tr>
	<tr>
		<td>Pilihan Jurusan 2 <b></b>
		</td>
		<td>:</td>
		<td width="390px"><b>{!!$user->application->departement2->departement_name!!}</b></td>
		<td align="right" width="100px">(Kode - <b>ISIAN</b>)
		</td>
	</tr>
	<tr>
		<td>
			Bersedia untuk Dipindah Jurusan
		</td>
		<td>:</td>
		<td><b>{!!($user->application->aggree_to_auto_move == 1) ? 'YA' : 'TIDAK'!!}</b></td>
	</tr>
</table>

<hr>
<table border="1">
	<tr align="center" >
		<td rowspan="2" width="200">
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
		<td width="80" align="left">Matematika
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">Bahasa Inggris
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">Bahasa Indonesia
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">Pendidikan Kewarganegaraan
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">Pendidikan Agama
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">RANGKING
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
		<td width="80"><b>ISIAN</b>
		</td>
	</tr>
</table>
@stop
