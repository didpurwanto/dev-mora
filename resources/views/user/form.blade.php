<div class="form-group">
	{!! Form::label('username', 'Nama Pengguna :') !!}
	{!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('email', 'Alamat E-Mail :') !!}
	{!! Form::text('email', null, [ 'class'=> 'form-control', 'placeholder'=>'Alamat email' ]) !!}
 </div>
<div class="form-group">
	{!! Form::label('password', 'Password :') !!}
	{!! Form::password('password', [ 'class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('password_confirmation', 'Konfirmasi Password :') !!}
	{!! Form::password('password_confirmation', [ 'class'=> 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('role', 'Hak Akses :') !!}
	{!! Form::select('role', ['255'=> 'Administrator','200' => 'Manager Pusat','100' => 'Manager Propinsi'], null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
