<div class="form-group">
	{!! Form::label('id', 'ID level pendidikan :') !!}
	{!! Form::text('id',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('level_name', 'Tingkat pendidikan :') !!}
	{!! Form::text('level_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
