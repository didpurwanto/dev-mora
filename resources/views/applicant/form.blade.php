<div class="form-group">
	{!! Form::label('full_name', 'Nama Lengkap :') !!}
	{!! Form::text('full_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Alamat E-mail :') !!}
	{!! Form::email('email',null ,['class' => 'form-control', 'placeholder' => 'Alamat E-mail']) !!}
</div>
<div class="form-group">
	{!! Form::label('gender', 'Jenis Kelamin :') !!}&nbsp;&nbsp;
	{!! Form::radio('gender', 1, 1) !!}
	{!! Form::label('Laki-laki','Laki-laki')!!}&nbsp;&nbsp;&nbsp;&nbsp;
	{!! Form::radio('gender', 0, 0) !!}
	{!! Form::label('Perampuan','Perempuan') !!}&nbsp;&nbsp;&nbsp;&nbsp;
</div> 
<div class="form-group">
	{!! Form::label('place_birth', 'Tempat Lahir :') !!}
	{!! Form::text('place_birth',null, ['class' => 'form-control','placeholder' => 'Tempat Lahir' ]) !!}
</div>
<div class="form-group">
	{!! Form::label('date_birth', 'Tanggal Lahir :') !!}
	{!! Form::text('date_birth', null, ['placeholder' => 'YYYY-MM-DD', 'id' => 'datepicker', 'class' => 'form-control', 'data-date-format' => 'yyyy-mm-dd', 'data-date-viewmode' => 'years']) !!}
</div>
<div class="form-group">
	{!! Form::label('recitation', 'Jumlah Hafalan Al-Quran :') !!}
	{!! Form::text('recitation', null, ['class' => 'form-control', 'placeholder' => '00']) !!}&nbsp;&nbsp; Juz
</div>
<div class="form-group">
	{!! Form::label('color_blind', 'Buta Warna :') !!}
	{!! Form::select('color_blind', array('1' => 'Ya', '0' => 'Tidak'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('mental_disorder', 'Riwayat Gangguan Mental :') !!}
	{!! Form::select('mental_disorder', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('illness', 'Penyakit yang sedang/pernah diderita :') !!}
	{!! Form::textarea('illness', null,['class' => 'form-control', 'placeholder' => 'DBD, Tipus, ']) !!}
</div>
<div class="form-group">
	{!! Form::label('blood_type', 'Golongan Darah :') !!}
	{!! Form::select('blood_type', array('A' => 'A', 'B' => 'B','AB' => 'AB','O' => 'O'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('weight', 'Berat Badan :') !!}
	{!! Form::text('weight', null ,['class' => 'form-control', 'placeholder' => '00']) !!}&nbsp;&nbsp; KG
</div>
<div class="form-group">
	{!! Form::label('height', 'Tinggi Badan :') !!}
	{!! Form::text('height', null ,['class' => 'form-control', 'placeholder' => '000']) !!}&nbsp;&nbsp; CM
</div>
<div class="form-group">
	{!! Form::label('contact', 'Telepon yang bisa dihubungi :') !!}
	{!! Form::text('contact', null ,['class' => 'form-control','placeholder' => '08XXXXXXXXXX']) !!}
</div>
<div class="form-group">
	{!! Form::label('marriage_status', 'Sudah Menikah :') !!}
	{!! Form::select('marriage_status', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
		{!! Form::label('address', 'Alamat :') !!}
		{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Jl. Sakti No. 05 RT/RW 005/005 Kel. Sekijang','cols' => '50', 'rows' => '2']) !!}
</div>
<div class="form-group">
	{!! Form::label('province_id', 'Provinsi :') !!}
	{!! Form::select('province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kabupaten_id', 'Kabupaten :') !!}
	{!! Form::select('kabupaten_id', ['1' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kecamatan_id', 'Kecamatan :') !!}
	{!! Form::select('kecamatan_id', ['1' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
</div>