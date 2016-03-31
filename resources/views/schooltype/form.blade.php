<div class="form-group">
	{!! Form::label('type_code', 'Kode :') !!}
	{!! Form::text('type_code',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('type_name', 'Jenis Sekolah :') !!}
	{!! Form::text('type_name',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('max_age', 'Maksimal Umur Pendaftar :') !!}
	{!! Form::text('max_age',null, ['class' => 'form-control','placeholder' => 'Contoh: 18']) !!}
</div>
<div class="form-group">
	{!! Form::label('max_graduate', 'Maksimal tahun lulus pendaftar :') !!}
	{!! Form::text('max_graduate',null, ['class' => 'form-control', 'placeholder' => 'Contoh: 2016']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
