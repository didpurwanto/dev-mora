<div class="form-group">
	{!! Form::label('id', 'ID :') !!}
	{!! Form::text('id',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('job_name', 'Jenid Pekerjaan :') !!}
	{!! Form::text('job_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
