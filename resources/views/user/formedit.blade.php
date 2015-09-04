<div class="form-group">
	{!! Form::label('username', 'Nama Pengguna :') !!}
	{!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password', 'Passwaord :') !!}
	{!! Form::password('password', [ 'class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password_confirmation', 'Passwaord :') !!}
	{!! Form::password('password_confirmation', [ 'class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('role', 'Hak Akses :') !!}
	{!! Form::select('role', $hak_akses, 0, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
