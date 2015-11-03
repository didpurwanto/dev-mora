<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('university_id', 'Nama Universitas') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('university_id', array('default' => 'Pilih Universitas') + $univ, Input::old('university_id',($appl->university_id ? $appl->university_id : '0')), ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('major_1_id', 'Pilihan Jurusan I') !!}
		</div>
		<div class="col-md-6">
		{!! Form::select('major_1_id', ['default' => 'Jurusan 1'] + $dep, $appl->major_1_id, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('major_2_id', 'Pilihan Jurusan II') !!}
		</div>
		<div class="col-md-6">
		{!! Form::select('major_2_id', ['default' => 'Jurusan 2'] + $dep,$appl->major_2_id, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('aggree_to_auto_move', 'Bersedia untuk dipindahkan :') !!}
		</div>
		<div class="col-md-2">
		{!! Form::select('aggree_to_auto_move', array('1' => 'Ya', '0' => 'Tidak'),1, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
</div>