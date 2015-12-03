<!DOCTYPE html>
<html>
<head>
<title> Formulir Registrasi Program Beasiswa Santri Berprestasi (PBSB) Tahun {{ date('Y')}}</title>
<style type="text/css">
html,body{
    height:100%;
    margin:0;
    padding:0;
    border:0;
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

#header,#footer{
    height:10%;
    position:relative;
    z-index:1;
	font-family: arial,helvetica,sans-serif;
	font-size: 11px;
}

td {
    vertical-align: top;
}

</style>
</head>
<body>
<div id="header">
<table style="font-family:arial,helvetica,sans-serif;">
	<tr>
		<td rowspan="3" width="50px">
			<img src="logo/logo.jpg" height="50px" width="50px">
		</td>
		<td width="440 px">
			<b><font size="3 px">KEMENTERIAN AGAMA RI </font></b></br>
			<b><font size="2 px">Seleksi Calon Peserta Program Beasiswa Santri Berprestasi</font></b> </br>
			<b>Tahun {{ date('Y')}}</b>
		</td>
		<td align="right" width="210px">
			<b><font size="3 px">FORMULIR REGISTRASI</font></b></br>
			No Registrasi : 123123123123
		</td>
	</tr>
</table>
<hr align="left" width="710px">
<table>
	<tr>
		<td width="400px">
      <font size="4 px"><b>{!! $user->applicant->full_name !!}</b></font> </br>
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
		<td align="right" width="300px">
			No. Peserta : <b>ISIAN</b></br>
			<i><small>(Diberikan oleh panitia seleksi)</small></i></br>
			<img src="images.jpg" height="120px" width="100px">
		</td>
	</tr>
</table>
<hr align="left" width="710px">
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
			Provinsi  : <b>{!!$user->family->province->province_name!!}</b>
		</td>
	</tr>
</table>

<hr align="left" width="710px">

<table>
	<tr>
		<td width="200px">
			Asal Pondok Pesantren
		</td>
		<td width="10px">:
		</td>
		<td width="290px"><b>{!!$user->pesantren->pesantren_name!!}</b>
		</td>
		<td width="190px" align="right">
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
		<td><b>{!!$user->pesantren->pesantren_contact!!}</b> </br>
		</td>
	</tr>
</table>

<hr align="left" width="710px">

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
		<td width="40px">
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
		<td><b>{!!$user->school->school_contact!!}</b></br>
		</td>
	</tr>
</table>

<hr align="left" width="710px">
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
		<td align="right" width="90px">(Kode - <b>ISIAN</b>)
		</td>
	</tr>
	<tr>
		<td>Pilihan Jurusan 2 <b></b>
		</td>
		<td>:</td>
		<td width="390px"><b>{!!$user->application->departement2->departement_name!!}</b></td>
		<td align="right" width="90px">(Kode - <b>ISIAN</b>)
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

<hr align="left" width="710px">
<table border="1">
	<tr align="center" >
		<td rowspan="2" width="180">
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

<hr align="left" width="710px">

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

<hr align="left" width="710px">
<table>
	<tr>
		<td>
			<small>
			Panitia Seleksi Calon Peserta Program Beasiswa Santri Berprestasi Tahun {{ date('Y') }}</br>
			Direktorak Pendidikan Diniyah & Pondok Pesantren | Direktorat Jenderal Pendidikan Islam Kementerian Agama RI </br>
			JL. Lapangan Banteng Barat No. 3-4 Jakarta Pusar - DKI Jakarta Telp : 021 - 3811810</br>
			Mohon dicetak/kopi rangkap 2 - Lembar : (1) Peserta (2) Kementerian Agama
			</br>
			</br>
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