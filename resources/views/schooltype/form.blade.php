<div class="form-group">
	{!! Form::label('id', 'ID Tipe Sekolah :') !!}
	{!! Form::text('id',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('type_name', 'Tipe Sekolah :') !!}
	{!! Form::text('type_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
