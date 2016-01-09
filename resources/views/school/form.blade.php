<div class="form-group {{ ! $errors->first('school_name') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('school_name', 'Nama Sekolah Asal') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('school_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Sekolah / Madrasah']) !!}
		</div>
		@if( $errors->first('school_name') )
			<span class="help-block text-danger">{{ $errors->first('school_name') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('school_principal_name') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('school_principal_name', 'Nama Kepala Sekolah') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('school_principal_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Kepala Sekolah / Madrasah']) !!}
		</div>
		@if( $errors->first('school_principal_name') )
			<span class="help-block text-danger">{{ $errors->first('school_principal_name') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('nisn') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('nisn', 'NISN') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('nisn', null,['class' => 'form-control', 'placeholder' => 'Nomor Induk Siswa Nasional']) !!}
		</div>
		@if( $errors->first('nisn') )
			<span class="help-block text-danger">{{ $errors->first('nisn') }}</span>
		@endif
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('school_status', 'Status Sekolah') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('school_status', ['1'=>'Negeri', '0'=>'Swasta'],$sch->school_status,['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group {{ ! $errors->first('graduate_year') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('graduate_year', 'Tahun Lulus Sekolah') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('graduate_year', [date("Y") => date("Y"), date("Y")-1 => date("Y")-1], $sch->graduate_year,['class' => 'form-control']) !!}
		</div>
		@if( $errors->first('graduate_year') )
			<span class="help-block text-danger">{{ $errors->first('graduate_year') }}</span>
		@endif
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('school_type_id', 'Jenis Sekolah') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('school_type_id', $sch_type,$sch->school_type_id,['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('program_study_id', 'Program Studi') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('program_study_id', $prog_stud,$sch->program_study_id,['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('inside_pondok', 'Lokasi Sekolah') !!}
		</div>
		<div class="col-md-4 form-inline">
		{!! Form::select('inside_pondok', ['1'=>'Didalam', '0'=>'Diluar'],$sch->inside_pondok,['class' => 'form-control']) !!} Pondok Pesantren
		</div>
	</div>
</div>
<div class="form-group {{ ! $errors->first('no_telp') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('no_telp', 'No. Telp Sekolah') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('no_telp', null,['class' => 'form-control', 'placeholder' => '']) !!}
		</div>
		@if( $errors->first('no_telp') )
			<span class="help-block text-danger">{{ $errors->first('no_telp') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('school_address') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('school_address', 'Alamat') !!}
		</div>
		<div class="col-md-4">
		{!! Form::textarea('school_address', null,['class' => 'form-control', 'placeholder' => 'Jl. Keramat Jati, No. 5, RT/RW 05/05, Kel. Sukajadi', 'cols' => '50', 'rows' => '1']) !!}
		</div>
		@if( $errors->first('school_address') )
			<span class="help-block text-danger">{{ $errors->first('school_address') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('kelurahan') ?'': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('Kelurahan', 'Desa/Kelurahan') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('kelurahan', null, ['class' => 'form-control', 'placeholder' => 'Nama Kelurahan']) !!}
		</div>
		@if( $errors->first('kelurahan') )
			<span class="help-block text-danger">{{ $errors->first('kelurahan') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('kecamatan') ?'': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('kecamatan', 'Kecamatan') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('kecamatan', null, ['class' => 'form-control', 'placeholder' => 'Nama Kecamatan']) !!}
		</div>
		@if( $errors->first('kecamatan') )
			<span class="help-block text-danger">{{ $errors->first('kecamatan') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('kabupaten') ?'': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('kabupaten', 'Kabupaten/Kota') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('kabupaten', null, ['class' => 'form-control', 'placeholder' => 'Nama Kabupaten']) !!}
		</div>
		@if( $errors->first('kabupaten') )
			<span class="help-block text-danger">{{ $errors->first('kabupaten') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('province_id') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('province_id', 'Provinsi') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('province_id', $prov, $sch->province_id,['class' => 'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary btn-large form-button']) !!}
</div>
