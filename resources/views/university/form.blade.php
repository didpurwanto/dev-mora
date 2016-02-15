<div class="form-group">
	{!! Form::label('university_code', 'Kode Universitas(Harus 3 digit) :') !!}
	{!! Form::text('university_code',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('university_name', 'Nama Universitas :') !!}
	{!! Form::text('university_name',null, ['class' => 'form-control']) !!}
</div>

   <div class="form-group">
    {!! Form::label('status','Status:') !!}
    {!! Form::radio('status', true, null, ['class' => 'class="btn btn-default']),'&nbsp', 'Aktif' !!}
    {!! Form::radio('status', false, null, ['class' => 'class="btn btn-default']),'&nbsp','non Aktif' !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
