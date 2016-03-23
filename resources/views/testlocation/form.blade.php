<div class="form-group">
	{!! Form::label('province_id', 'Provinsi :') !!}
	{!! Form::select('province_id', $prov, null,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('location_name', 'Nama Lokasi :') !!}
	{!! Form::text('location_name',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('quota', 'Kuota :') !!}
	{!! Form::text('quota',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
