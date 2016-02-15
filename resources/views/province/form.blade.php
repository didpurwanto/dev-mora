<div class="form-group">
	{!! Form::label('province_code', 'Kode Provinsi(Harus 2 digit) :') !!}
	{!! Form::text('province_code',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('province_name', 'Nama Provinsi :') !!}
	{!! Form::text('province_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-md-4 col-md-offset-4">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
