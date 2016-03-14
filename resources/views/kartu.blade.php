<!DOCTYPE html>
<html>
<head>
<style type="text/css">
html,body{
    height:100%;
    margin-top:5px;
    margin-left:5px;
    margin-right:5px;
    margin-bottom:5px;
    padding:10px;
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

/*.content{
    display:table;
    width:100%;
    border-collapse:separate;
    height:80%;
}*/

.Col{
    display:table-cell;
    width:30%;
    height:30%;
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
    position:relative;
	font-size: 12px;

}

table.fixed { 
	table-layout:fixed; 
	border-style: solid;
    border-color: white;
	width: 350px;
	
}

td .content {
  /*position: absolute;*/
  top: 0;
  bottom: 0;
  left: 60;
  right: 0;
  color:black;
  font-size: 80%;
  background: white;
  text-align:center; 
  vertical-align:middle;  
}

</style>
</head>
<body>
<div id="header">


<table style="font-family:arial,helvetica,sans-serif;">
	<tr>
		<td width="60px">
			<img src="logo/logo.jpg" height="50px" width="50px">
		</td>
		<td width="440 px">
			<b><font size="20px">KEMENTERIAN AGAMA RI </font></b><br />
			<b><font size="12 px">Seleksi Calon Peserta Program Beasiswa Santri Berprestasi</font></b> <br />
			<b><font size="12 px">Tahun {{date('Y')}}</font></b>
		</td>
		<td align="right" width="250px">
			<b><font size="30px">TANDA PESERTA</font></b><br />
			<font size="12px">No Registrasi : {!! $registration_number !!}</font>
		</td>
	</tr>
</table>

<hr>
<!-- <br> -->

<table>
	<tr>
		<td width="400px">
			<font size="20px"><b>{!! $user->applicant->full_name !!}</b></font> <br />
			Jenis Kelamin : <b>{!! ($user->applicant->gender == 1) ? 'Laki-laki' : 'Perempuan' !!}</b> <br />
			Tempat/Tanggal Lahir : <b>{!! $user->applicant->place_birth !!} / {!! $date_birth  !!}</b> <br /><br />
			Pilihan Perguruan Tinggi : <b>{!!$user->application->university->university_name!!}</b> <br />

			<br />
			Pilihan 1 :
			<b>{!!$user->application->departement->departement_name!!}</b>
			(Kode - <b>{!!$user->application->departement->departement_code!!}</b> )

			<br />
			<br />
			Pilihan 2 :
			<b>{!!$user->application->departement2->departement_name!!}</b>
			(Kode - <b>{!!$user->application->departement2->departement_code!!}</b> )

			<br />
			<br />
			Bersedia untuk Dipindah Jurusan = <b>{!!($user->application->aggree_to_auto_move == 1) ? 'YA' : 'TIDAK'!!}</b>
		</td>

		<td align="right" width="350px">
			No. Peserta : 
			<!-- <table class="fixed" border="1" cellspacing="1%" cellpadding="2%" > -->
			<table class="fixed" border="1">
				<tbody>
					<tr>
						<td class="content">{!! $test_num[0] !!}</td>
						<td class="content">{!! $test_num[1] !!}</td>
						<td class="content">{!! $test_num[2] !!}</td>
						<td class="content">{!! $test_num[3] !!}</td>
						<td class="content">{!! $test_num[4] !!}</td>
						<td class="content">{!! $test_num[5] !!}</td>
						<td class="content">{!! "" !!}</td>
						<td class="content">{!! "" !!}</td>
						<td class="content">{!! "" !!}</td>
						<td class="content">{!! "" !!}</td>
					</tr>
				</tbody>
			</table>
			<i><small>(Diberikan oleh panitia seleksi)</small></i><br /><br />
			<img src="images/foto.jpg" width="114px" height="150px">
		</td>
	</tr>
</table>
<br>
<hr>
<br>
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
		<td><b>{!! $user->pesantren->no_telp !!}</b> <br />
		</td>
	</tr>
</table>

<hr>

<!-- PROBLEM No 11 EMAIL -->
<table>		
	<tr align="center">
		<td width="470px">		
		</td>
		<td width="233">		
		</td>
	</tr>
	<tr align="center">
			  
		<td width="470px">		
		</td>
		<td width="233px">
			ttd
		</td>
	</tr>
</table>
<br />
<br />
<br />
<table>		
	<tr align="center">
		<td width="470px">		
		</td>
		<td width="233">
			_______________________
		</td>
	</tr>
	<tr align="center">
		<td width="470px">		
		</td>
		<td width="233px">
			Petugas Verifikasi Kemenag Wilayah Provinsi
		</td>
	</tr>
</table>
<!-- END PROBLEM No 11 EMAIL -->
<table>
	<tbody>
		<tr>
		<td>
			<small>
			Tanda peserta yang berlaku adalah yang telah diberi pengesahan oleh Panitia
			<br />
			Harap disimpan dengan baik karena akan digunakan sebagai salah satu kelengkapan pada saat konfirmasi kesediaan dan verifikasi data
			</small>
		</td>
		</tr>
	</tbody>
</table>

<br>
<!-- <br> -->
<center><font color="red">------------------------------<wbr>------------------Potong disini; serahkan formulir bagian bawah kepada petugas pendaftaran tes --------------------------------------------------</font></center>
<!-- <br> -->
<br>

<table style="font-family:arial,helvetica,sans-serif;">
	<tr>
		<td width="60px">
			<img src="logo/logo.jpg" height="50px" width="50px">
		</td>
		<td width="440 px">
			<b><font size="20px">KEMENTERIAN AGAMA RI </font></b><br />
			<b><font size="12 px">Seleksi Calon Peserta Program Beasiswa Santri Berprestasi</font></b> <br />
			<b><font size="12 px">Tahun {{date('Y')}}</font></b>
		</td>
		<td align="right" width="250px">
			<b><font size="30px">TANDA PESERTA</font></b><br />
			<font size="12px">No Registrasi : {!! $registration_number !!}</font>
		</td>
	</tr>
</table>

<hr>
<!-- <br> -->

<table>
	<tr>
		<td width="400px">
			<font size="20px"><b>{!! $user->applicant->full_name !!}</b></font> <br />
			Jenis Kelamin : <b>{!! ($user->applicant->gender == 1) ? 'Laki-laki' : 'Perempuan' !!}</b> <br />
			Tempat/Tanggal Lahir : <b>{!! $user->applicant->place_birth !!} / {!! $date_birth  !!}</b> <br /><br />
			Pilihan Perguruan Tinggi : <b>{!!$user->application->university->university_name!!}</b> <br />

			<br />
			Pilihan 1 :
			<b>{!!$user->application->departement->departement_name!!}</b>
			(Kode - <b>{!!$user->application->departement->departement_code!!}</b> )

			<br />
			<br />
			Pilihan 2 :
			<b>{!!$user->application->departement2->departement_name!!}</b>
			(Kode - <b>{!!$user->application->departement2->departement_code!!}</b> )

			<br />
			<br />
			Bersedia untuk Dipindah Jurusan = <b>{!!($user->application->aggree_to_auto_move == 1) ? 'YA' : 'TIDAK'!!}</b>
		</td>

		<td align="right" width="350px">
			No. Peserta : 
			<table class="fixed" border="1">
				<tbody>
					<tr>
						<td class="content">{!! $test_num[0] !!}</td>
						<td class="content">{!! $test_num[1] !!}</td>
						<td class="content">{!! $test_num[2] !!}</td>
						<td class="content">{!! $test_num[3] !!}</td>
						<td class="content">{!! $test_num[4] !!}</td>
						<td class="content">{!! $test_num[5] !!}</td>
						<td class="content">{!! "" !!}</td>
						<td class="content">{!! "" !!}</td>
						<td class="content">{!! "" !!}</td>
						<td class="content">{!! "" !!}</td>
					</tr>
				</tbody>
			</table>
			<i><small>(Diberikan oleh panitia seleksi)</small></i><br /><br />
			<img src="images/foto.jpg" width="114px" height="150px">
		</td>
	</tr>
</table>

<br>
<hr>
<br>

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
<!-- PROBLEM No 11 EMAIL -->
<table>		
	<tr align="center">
		<td width="470px">		
		</td>
		<td width="233">		
		</td>
	</tr>
	<tr align="center">
			  
		<td width="470px">		
		</td>
		<td width="233px">
			ttd
		</td>
	</tr>
</table>
<br />
<br />
<br />
<table>		
	<tr align="center">
		<td width="470px">		
		</td>
		<td width="233">
			_______________________
		</td>
	</tr>
	<tr align="center">
		<td width="470px">		
		</td>
		<td width="233px">
			Petugas Verifikasi Kemenag Wilayah Provinsi
		</td>
	</tr>
</table>
<!-- END PROBLEM No 11 EMAIL -->
<table>
	<tbody>
		<tr>
		<td>
			<small>
			Tanda peserta yang berlaku adalah yang telah diberi pengesahan oleh Panitia
			<br />
			Harap disimpan dengan baik karena akan digunakan sebagai salah satu kelengkapan pada saat konfirmasi kesediaan dan verifikasi data
			</small>
		</td>
		</tr>
	</tbody>
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
