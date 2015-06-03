<div class="form-group">
		{!! Form::label('pesantren_name', 'Nama Asal PONPES :') !!}
		{!! Form::text('pesantren_name', null,['class' => 'form-control', 'placeholder' => 'Pondok Pesantren Hubbul Wathan']) !!}
</div> 
<div class="form-group">
		{!! Form::label('kiai_name', 'Nama Pimpinan PONPES :') !!}
		{!! Form::text('kiai_name', null,['class' => 'form-control', 'placeholder' => 'Nama Kiyai']) !!}
</div> 
<div class="form-group">
		{!! Form::label('nipp', 'NIPP :') !!}
		{!! Form::text('nipp', null,['class' => 'form-control', 'placeholder' => 'Nomor Induk Pondok Pesantren']) !!}
</div> 
<div class="form-group">
	{!! Form::label('pesantren_type', 'Jenis PONPES :') !!}
	{!! Form::select('pesantren_type', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('pesantren_address', 'Alamat PONPES :') !!}
	{!! Form::textarea('pesantren_address', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
		{!! Form::label('school_name', 'Nama Asal Sekolah :') !!}
		{!! Form::text('school_name', null,['class' => 'form-control', 'placeholder' => 'Nama Sekolah']) !!}
</div> 
<div class="form-group">
		{!! Form::label('school_principal_name', 'Nama Kepala Sekolah :') !!}
		{!! Form::text('school_principal_name', null,['class' => 'form-control', 'placeholder' => 'Nama Kepala Sekolah']) !!}
</div> 
<div class="form-group">
		{!! Form::label('nisn', 'NISN :') !!}
		{!! Form::text('nisn', null,['class' => 'form-control', 'placeholder' => 'Nomor Induk Sekolah Nasional']) !!}
</div> 
<div class="form-group">
	{!! Form::label('school_status', 'Status Sekolah :') !!}
	{!! Form::select('school_status', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('graduate_year', 'Tahun Lulus Sekolah :') !!}
	{!! Form::select('graduate_year', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('school_type', 'Jenis Sekolah :') !!}
	{!! Form::select('school_type', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('school_major', 'Program Studi :') !!}
	{!! Form::select('school_major', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('school_location', 'Lokasi Sekolah :') !!}
	{!! Form::select('school_location', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!} Pondok Pesantren
</div>
<div class="form-group">
	{!! Form::label('school_address', 'Alamat Sekolah :') !!}
	{!! Form::textarea('school_address', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
	{!! Form::reset('Cancel', ['class' => 'btn btn-primary form-button']) !!}
</div>