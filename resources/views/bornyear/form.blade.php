<div class="form-group">
	{!! Form::label('tahun_lahir', 'Tahun Lahir :') !!}
	{!! Form::text('tahun_lahir',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
