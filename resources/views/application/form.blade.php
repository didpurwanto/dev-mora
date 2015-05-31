<div class="form-group">
		{!! Form::label('applicant_number', 'Nomor Peserta :') !!}
		{!! Form::text('applicant_number', null,['class' => 'form-control', 'placeholder' => 'Nomor Peserta']) !!}
</div> 
<div class="form-group">
	{!! Form::label('university_id', 'Nama Universitas :') !!}
	{!! Form::select('university_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('faculty_id', 'Fakultas :') !!}
	{!! Form::select('faculty_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('major_1_id', 'Jurusan I :') !!}
	{!! Form::select('major_1_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('major_2_id', 'Jurusan II :') !!}
	{!! Form::select('major_2_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('aggree_to_auto_move	', 'Bersedia untuk dipindahkan :') !!}
	{!! Form::select('aggree_to_auto_move	', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
	{!! Form::reset('Cancel', ['class' => 'btn btn-primary form-button']) !!}
</div>