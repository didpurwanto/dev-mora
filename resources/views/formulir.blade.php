<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> Formulir Registrasi Program Beasiswa Santri Berprestasi (PBSB)</title>
<style type="text/css">
@media print {
html,body{
    height:90%;
    margin-top:5px;
    margin-left:5px;
    margin-right:5px;
    margin-bottom:5px;
    padding:10px;
    border:0;
}

hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 0.5px;
}

div{
    margin:0;
    border:0;
}

textarea {
    margin:0;
    border:0;
    padding:0;
    height:100%;
    width:100%;
}

.content{
    display:table;
    width:100%;
    border-collapse:separate;
    height:80%;
}

.Col{
    display:table-cell;
    width:30%;
    height:100%;
}

#isi,#footer{
    height:10%;
    position:relative;
    z-index:1;
	font-family: arial,helvetica,sans-serif;
	font-size: 11px;
}

td {
    vertical-align: top;
}
}

html,body{
    height:90%;
    margin-top:5px;
    margin-left:5px;
    margin-right:5px;
    margin-bottom:5px;
    padding:10px;
    border:0;
}
hr {
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 0.5px;
}

div{
    margin:0;
    border:0;
}

textarea {
    margin:0;
    border:0;
    padding:0;
    height:100%;
    width:100%;
}

/*.content{
    display:table;
    width:100%;
    border-collapse:separate;
    height:80%;
}*/

td .content {
  /*position: absolute;*/
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  color:white;
  font-size: 120%;
  background: black;
  text-align:center;
  vertical-align:middle;
}


.Col{
    display:table-cell;
    width:30%;
    height:100%;
}

#isi,#footer{
    height:10%;
    position:relative;
    z-index:1;
	font-family: arial,helvetica,sans-serif;
	font-size: 11px;
}

td {
    vertical-align: top;
}

table.fixed {
	table-layout:fixed;
	border-style: solid;
    border-color: white;
	width: 260px;
}

</style>
</head>
<body>
<div id="isi">
<table style="font-family:arial,helvetica,sans-serif;">
	<tr>
		<td width="60px">
			<img src="logo/logo.jpg" height="50px" width="50px">
		</td>
		<td width="440 px">
			<b><font size="15 px">KEMENTERIAN AGAMA RI </font></b><br />
			<b><font size="11 px">Seleksi Calon Peserta Program Beasiswa Santri Berprestasi</font></b> <br />
			<b><font size="11 px">Tahun {{ date('Y')}}</font></b>
		</td>
		<td align="right" width="260px">
			<b><font size="20px">FORMULIR REGISTRASI</font></b><br />
			No Registrasi :
			<table class="fixed" border="1" cellspacing="2%" cellpadding="6%">
				<tr>
					<td>{!! $reg_num[0] !!}</td>
					<td>{!! $reg_num[1] !!}</td>
					<td>{!! $reg_num[2] !!}</td>
					<td>{!! $reg_num[3] !!}</td>
					<td>{!! $reg_num[4] !!}</td>
					<td>{!! $reg_num[5] !!}</td>
					<td>{!! $reg_num[6] !!}</td>
					<td>{!! $reg_num[7] !!}</td>
					<td>{!! $reg_num[8] !!}</td>
					<td>{!! $reg_num[9] !!}</td>
					<td>{!! $reg_num[10] !!}</td>
					<td>{!! $reg_num[11] !!}</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
<hr>
<table>
	<tr>
	<td width="400px">
      <font size="20px"><b>{!! $user->applicant->full_name !!}</b></font> <br />
			Jenis Kelamin : <b>{!! ($user->applicant->gender == 1) ? 'Laki-laki' : 'Perempuan' !!}</b> <br />
			Tempat/Tanggal Lahir : <b>{!! $user->applicant->place_birth !!} / {!! $date_birth  !!}</b> <br />
			Penyakit yang sedang/pernah diderita:  <br />
			<b>{!! $user->applicant->illness !!}</b><br />
			<br />
			Buta Warna : <b>{!! ($user->applicant->color_blind == 1) ? 'Ya' : 'Tidak' !!}</b> <br />
			Gol. Darah <b>{!! $user->applicant->blood_type !!}</b> Berat <b>{!! $user->applicant->weight !!}</b> Kg Tinggi <b>{!! $user->applicant->height !!}</b> cm <br />
			Riwayat Gangguan Mental : <b>{!! ($user->applicant->mental_disorder == 1) ? 'Ya' : 'Tidak' !!}</b> <br />
			Hafalan Al-Qurran : <b>{!! $user->applicant->recitation !!}</b> Juz <br />
			No Telp yang Bisa Dihubungi : <b>{!! $user->applicant->contact !!}</b> <br />
		</td>
		<td align="right" width="300px">
			<!-- No. Peserta : <b>ISIAN</b><br /> -->
			<!-- <i><small>(Diberikan oleh panitia seleksi)</small></i><br /> -->
			<br>
			<img src="{!! $user->applicant->profile_photo !!}" width="114px" height="150px">
		</td>
	</tr>
</table>
<hr>
<table>
	<tr>
		<td width="200px">
      Anak Ke <b>{!!$user->family->anak_ke !!}</b> Dari <b>{!!$user->family->saudara !!}</b> Bersaudara
		</td>
		<td  width="10px">&nbsp;
		</td>
		<td  width="200px">
		</td>
		<td  width="100px">
		</td>
		<td  width="190px">
		</td>
	</tr>
	<tr>
    <td width="200px">
			Ayah Kandung
		</td>
		<td width="10px">:
		</td>
		<td width="100px"><b>{!!($user->family->father_deceased == 1) ? 'Alm. ' : ''!!}{!!$user->family->father_name !!}</b>
		</td>
		<td >Umur <b>{!!$user->family->father_age!!} </b> Tahun
		</td>
		<td >Pekerjaan : <b>{!!$user->family->jobType->job_name!!}</b> <br />
		Pendidikan Terakhir : <b>{!!$user->family->educationLevel->level_name!!}</b> <br />
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
		<td width="150px">Umur <b>{!!$user->family->mother_age!!}</b> Tahun
		</td>
		<td>Pekerjaan : <b>{!!$user->family->jobTypeIbu->job_name!!}</b> <br />
		Pendidikan Terakhir : <b>{!!$user->family->educationLevelIbu->level_name!!}</b> <br />
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
		<td><b>{!!$user->family->address!!}</b> <br />
      Kel./Desa : <b>{!!$user->family->kelurahan!!}</b> <br />
			Kecamatan : <b>{!!$user->family->kecamatan!!}</b> <br />
			Kab./Kota : <b>{!!$user->family->kabupaten!!}</b> <br />
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
		<td><b>{!!$user->pesantren->pesantren_address!!}</b> <br />
      Kel./Desa : <b>{!!$user->pesantren->kelurahan!!}</b> <br />
			Kecamatan : <b>{!!$user->pesantren->kecamatan!!}</b> <br />
			Kab./Kota : <b>{!!$user->pesantren->kabupaten!!}</b> <br />
			Provinsi  : <b>{!!$user->pesantren->province->province_name!!}</b>
		</td>
	</tr>
	<tr>
		<td>
			Nama Pimpinan PP
		</td>
		<td>:
		</td>
		<td><b>{!!$user->pesantren->kiai_name!!}</b> <br />
		</td>
	</tr>
	<tr>
		<td>
			No Telp PP
		</td>
		<td>:
		</td>
		<td><b>{!!$user->pesantren->no_telp!!}</b> <br />
		</td>
	</tr>
</table>

<hr>

<table>
	<tr>
		<td width="200px">Asal Sekolah</td>
		<td width="10px">:</td>
		<td width="100px"><b>{!!$user->school->school_name!!}</b></td>
		<td width="30px">
			Jenis<br />
			Lokasi
		</td>
		<td width="10px">:<br />
		:
		</td>
		<td width="80px"><b>{!!$user->school->schoolType->type_name!!}</b><br />
		<b>{!!($user->school->inside_pondok == 1) ? 'DIDALAM' : 'DILUAR'!!}</b>
		</td>
		<td width="40px">
			Status<br />
			NISN
		</td>
		<td width="10px">:<br />
		:
		</td>
		<td width="80px"><b>{!!($user->school->school_status == 1) ? 'NEGERI' : 'SWASTA'!!}</b><br />
		<b>{!!$user->school->nisn!!}</b>
		</td>
	</tr>
	<tr>
		<td width="200px">Alamat Sekolah</td>
		<td width="10px">:</td>
		<td width="100px"><b>{!!$user->school->school_address!!}</b> <br />
      Kel./Desa : <b>{!!$user->school->kelurahan!!}</b> <br />
			Kecamatan : <b>{!!$user->school->kecamatan!!}</b> <br />
			Kab./Kota : <b>{!!$user->school->kabupaten!!}</b> <br />
			Provinsi  : <b>{!!$user->school->province->province_name!!}</b>
		</td>
	</tr>
	<tr>
		<td width="200px">Nama Kepala Sekolah</td>
		<td width="10px">:</td>
		<td width="100px"><b>{!!$user->school->school_principal_name!!}</b> <br />
		</td>
	</tr>
	<tr>
		<td width="200px">No Telp Sekolah</td>
		<td width="10px">:
		</td>
		<td width="260px"><b>{!!$user->school->no_telp!!}</b><br />
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
		<td align="left" width="90px">(Kode - <b>{!!$user->application->departement->departement_code!!}</b>)
		</td>
	</tr>
	<tr>
		<td>Pilihan Jurusan 2 <b></b>
		</td>
		<td>:</td>
		<td width="390px"><b>{!!$user->application->departement2->departement_name!!}</b></td>
		<td align="left" width="90px">(Kode - <b>{!!$user->application->departement2->departement_code!!}</b>)
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
<table border="1" align="center">
	<tr align="center" >
		<td rowspan="2" width="130">Mata Pelajaran
		</td>
		<td colspan="2">Kelas I
		</td>
		<td colspan="2">Kelas II
		</td>
		<td colspan="2">Kelas III
		</td>
	</tr>
	<tr  align="center">
		<td width="60">Sem I
		</td>
		<td width="60">Sem II
		</td>
		<td width="60">Sem III
		</td>
		<td width="60">Sem IV
		</td>
		<td width="60">Sem V
		</td>
		<td width="60">Sem VI
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp;{{ $listSubjects[0] }}
		</td>
		<td width="60"><b>{{$subject_1[0]}}</b>
		</td>
		<td width="60"><b>{{$subject_1[1]}}</b>
		</td>
		<td width="60"><b>{{$subject_1[2]}}</b>
		</td>
		<td width="60"><b>{{$subject_1[3]}}</b>
		</td>
		<td width="60"><b>{{$subject_1[4]}}</b>
		</td>
		<td width="60"><b>{{$subject_1[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp;{{ $listSubjects[1] }}
		</td>
		<td width="60"><b>{{$subject_2[0]}}</b>
		</td>
		<td width="60"><b>{{$subject_2[1]}}</b>
		</td>
		<td width="60"><b>{{$subject_2[2]}}</b>
		</td>
		<td width="60"><b>{{$subject_2[3]}}</b>
		</td>
		<td width="60"><b>{{$subject_2[4]}}</b>
		</td>
		<td width="60"><b>{{$subject_2[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp;{{ $listSubjects[2] }}
		</td>
		<td width="60"><b>{{$subject_3[0]}}</b>
		</td>
		<td width="60"><b>{{$subject_3[1]}}</b>
		</td>
		<td width="60"><b>{{$subject_3[2]}}</b>
		</td>
		<td width="60"><b>{{$subject_3[3]}}</b>
		</td>
		<td width="60"><b>{{$subject_3[4]}}</b>
		</td>
		<td width="60"><b>{{$subject_3[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp;{{ $listSubjects[3] }}
		</td>
		<td width="60"><b>{{$subject_4[0]}}</b>
		</td>
		<td width="60"><b>{{$subject_4[1]}}</b>
		</td>
		<td width="60"><b>{{$subject_4[2]}}</b>
		</td>
		<td width="60"><b>{{$subject_4[3]}}</b>
		</td>
		<td width="60"><b>{{$subject_4[4]}}</b>
		</td>
		<td width="60"><b>{{$subject_4[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp;{{ $listSubjects[4] }}
		</td>
		<td width="60"><b>{{$subject_5[0]}}</b>
		</td>
		<td width="60"><b>{{$subject_5[1]}}</b>
		</td>
		<td width="60"><b>{{$subject_5[2]}}</b>
		</td>
		<td width="60"><b>{{$subject_5[3]}}</b>
		</td>
		<td width="60"><b>{{$subject_5[4]}}</b>
		</td>
		<td width="60"><b>{{$subject_5[5]}}</b>
		</td>
	</tr>
	<tr  align="center">
		<td width="80" align="left">&nbsp;{{ $listSubjects[5] }}
		</td>
		<td width="60"><b>{{$ranking[0]}}</b>
		</td>
		<td width="60"><b>{{$ranking[1]}}</b>
		</td>
		<td width="60"><b>{{$ranking[2]}}</b>
		</td>
		<td width="60"><b>{{$ranking[3]}}</b>
		</td>
		<td width="60"><b>{{$ranking[4]}}</b>
		</td>
		<td width="60"><b>{{$ranking[5]}}</b>
		</td>
	</tr>
</table>

<hr>

<table>
	<tr>
		<td width="700px">
			Saya yang bertanda-tangan di bawah ini menyatakan bahwa data yang saya isikan adalah sesuai dengan kondisi sebenarnya, dan apabila dikemudian hari diketahui terjadi penyimpangan dan/atau bahwa saya ternyata tidak memenuhi persyaratan yang telah ditentukan, maka saya bersedia untuk digugurkan status kepesertaan saya sebagai peserta Seleksi Calon Peserta Program Beasiswa Santri Berprestasi Tahun {{date('Y')}}
		</td>
	</tr>
</table>

<table>
	<tr align="center">
    <td width="350px">
			Mengetahui,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</td>
		<td width="350px">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;________________,___________, <b>{{ date('Y') }}</b>
		</td>
	</tr>
  <tr align="left">

  </tr>
</table>
<br />
<br />
<br />
<br />
<table>
	<tr align="center">
		<td width="233px">
			_______________________
		</td>
		<td width="233px">
			_______________________
		</td>
		<td width="233px">
			_______________________
		</td>
	</tr>
	<tr align="center">
		<td width="233px">
			PIMPINAN PP.
		</td>
		<td width="233px">
			ORANG TUA/WALI
		</td>
		<td width="233px">
			PESERTA
		</td>
	</tr>
</table>

<hr>
<table>
	<tr>
		<td>
			<small>
			Panitia Seleksi Calon Peserta Program Beasiswa Santri Berprestasi Tahun {{ date('Y') }}<br />
			Direktorak Pendidikan Diniyah & Pondok Pesantren | Direktorat Jenderal Pendidikan Islam Kementerian Agama RI <br />
			JL. Lapangan Banteng Barat No. 3-4 Jakarta Pusar - DKI Jakarta Telp : 021 - 3811810<br />
			Mohon dicetak/kopi rangkap 2 - Lembar : (1) Peserta (2) Kementerian Agama
			<br />
			<br />
			Tanggal Finalisasi :  <b>{!!$user->updated_at!!}</b>

			</small>
		</td>
	</tr>
</table>
</div>
<!--div class="content">
    <div id="left" class="Col"><textarea style="background-color:lightskyblue;">A Just a test</textarea></div>
    <div id="center" class="Col"><textarea style="background-color:green;">B Just a test</textarea></div>
    <div id="right" class="Col"><textarea style="background-color:lime;">C Just a test</textarea></div>
</div>
<div id="footer"><textarea style="background-color:yellow;">F Just a test</textarea></div-->
</body>
</html>
