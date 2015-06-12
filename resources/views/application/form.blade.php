<div class="form-group">
		{!! Form::label('applicant_number', 'Nomor Peserta :') !!}
		{!! Form::text('applicant_number', null,['class' => 'form-control', 'placeholder' => 'Nomor Peserta', 'disabled']) !!}
</div> 
<div class="form-group">
	{!! Form::label('university_id', 'Nama Universitas :') !!}
	{!! Form::select('university_id', $univ, 'Universitas', ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('major_1_id', 'Pilihan Jurusan I :') !!}
	{!! Form::select('major_1_id', ['1' => 'Jurusan 1'], ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('major_2_id', 'Pilihan Jurusan II :') !!}
	{!! Form::select('major_2_id', ['1' => 'Jurusan 2'], ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('aggree_to_auto_move', 'Bersedia untuk dipindahkan :') !!}
	{!! Form::select('aggree_to_auto_move', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
</div>