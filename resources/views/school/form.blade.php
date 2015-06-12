<div class="form-group">
	{!! Form::label('school_name', 'Nama Sekolah Asal:') !!}
	{!! Form::text('school_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Sekolah / Madrasah']) !!}
</div>
<div class="form-group">
	{!! Form::label('school_principal_name', 'Nama Kepala Sekolah :') !!}
	{!! Form::text('school_principal_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Kepala Sekolah / Madrasah']) !!}
</div>
<div class="form-group">
	{!! Form::label('nisn', 'NISN :') !!}
	{!! Form::text('nisn', null,['class' => 'form-control', 'placeholder' => 'Nomor Induk Siswa Nasional']) !!}
</div> 
<div class="form-group">
	{!! Form::label('school_status', 'Status Sekolah :') !!}
	{!! Form::select('school_status', ['1'=>'Negeri', '0'=>'Swasta'],['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('graduate_year', 'Tahun Lulus Sekolah :') !!}
	{!! Form::text('graduate_year',null ,['class' => 'form-control', 'placeholder' => '2020']) !!}
</div>
<div class="form-group">
	{!! Form::label('school_type_id', 'Jenis Sekolah :') !!}
	{!! Form::select('school_type_id', $sch_type,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('program_study_id', 'Program Studi :') !!}
	{!! Form::select('program_study_id', $prog_stud,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('inside_pondok', 'Lokasi Sekolah :') !!}
	{!! Form::select('inside_pondok', ['1'=>'Didalam', '0'=>'Diluar'],['class' => 'form-control']) !!} Pondok Pesantren
</div>
<div class="form-group">
	{!! Form::label('school_address', 'Alamat :') !!}
	{!! Form::textarea('school_address', null,['class' => 'form-control', 'placeholder' => 'Jl. Keramat Jati, No. 5, RT/RW 05/05, Kel. Sukajadi', 'cols' => '50', 'rows' => '2']) !!}
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