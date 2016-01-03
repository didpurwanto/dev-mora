<div class="form-group">
	{!! Form::label('id', 'ID Range Gaji :') !!}
	{!! Form::text('id',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('salary_name', 'Range Gaji :') !!}
	{!! Form::text('range_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
