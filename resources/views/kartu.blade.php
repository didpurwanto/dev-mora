<!DOCTYPE html>
<html>
<head>
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
			<b>Tahun {{date('Y')}}</b>
		</td>
		<td align="right" width="210px">
			<b><font size="3 px">FORMULIR REGISTRASI</font></b></br>
			No Registrasi : 123123123123
		</td>
	</tr>
</table>

<hr>

<table>
	<tr>
		<td width="400px">
			<font size="4 px"><b>{!! $user->applicant->full_name !!}</b></font> </br>
			Jenis Kelamin : <b>{!! ($user->applicant->gender == 1) ? 'Laki-laki' : 'Perempuan' !!}</b> </br>
			Tempat/Tanggal Lahir : <b>{!! $user->applicant->place_birth !!} / {!! $date_birth  !!}</b> </br>
			Pilihan Perguruan Tinggi : <b>{!!$user->application->university->university_name!!}</b> </br>

			</br>
			</br>
			Pilihan 1 :
			<b>{!!$user->application->departement->departement_name!!}</b>
			(Kode - <b>ISIAN</b> )

			</br>
			</br>
			Pilihan 2 :
			<b>{!!$user->application->departement2->departement_name!!}</b>
			(Kode - <b>ISIAN</b> )

			</br>
			</br>
			Bersedia untuk Dipindah Jurusan = <b>{!!($user->application->aggree_to_auto_move == 1) ? 'YA' : 'TIDAK'!!}</b>
		</td>

		<td align="right" width="300px">
			No. Peserta : <b>ISIAN</b></br>
			<i><small>(Diberikan oleh panitia seleksi)</small></i></br>
			<img src="images.jpg" height="120px" width="100px">
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

<hr>
<table>
	<tr>
		<td>
			<small>
			Tanda peserta yang berlaku adalah yang telah diberi pengesahan oleh Panitia
			</br>
			Harap disimpan dengan baik karena akan digunakan sebagai salah satu kelengkapan pada saat
			</br>
			Konfirmasi kesediaan dan verifikasi data
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
