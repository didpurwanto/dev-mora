<div class="form-group">
	{!! Form::label('university_name', 'Nama Universitas :') !!}
	{!! Form::text('university_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>