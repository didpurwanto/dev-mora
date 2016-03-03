<div class="form-group">
	{!! Form::label('prodi_code', 'Kode Program Studi( harus 1 Digit) :') !!}
	{!! Form::text('prodi_code', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('program_name', 'Nama Program :') !!}
	{!! Form::text('program_name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('list_subject', 'Daftar Pelajaran :') !!}
	{!! Form::textarea('list_subject',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
