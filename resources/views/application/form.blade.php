<div class="form-group {{ ! $errors->first('university_id') ?'': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('university_id', 'Nama Universitas') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('university_id', array('0' => 'Pilih Universitas') + $univ, $appl->university_id, ['class' => 'form-control']) !!}
		</div>
		@if( $errors->first('university_id') )
			<span class="help-block text-danger">{{ $errors->first('university_id') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('major_1_id') ?'': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('major_1_id', 'Pilihan Jurusan I') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('major_1_id', array('0' => 'Jurusan 1') + $dep, $appl->major_1_id, ['class' => 'form-control']) !!}
		</div>
		@if( $errors->first('major_1_id') )
			<span class="help-block text-danger">{{ $errors->first('major_1_id') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('major_2_id') ?'': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('major_2_id', 'Pilihan Jurusan II') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('major_2_id', array('0' => 'Jurusan 2') + $dep, $appl->major_2_id, ['class' => 'form-control']) !!}
		</div>
		@if( $errors->first('major_2_id') )
			<span class="help-block text-danger">{{ $errors->first('major_2_id') }}</span>
		@endif
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
<!-- 
<div class="alert alert-danger">
	<p>Pastikan <b>JURUSAN</b> yang anda pilih sesuai dengan Jurusan di Sekolah anda (<b>IPA/IPS/BAHASA/AGAMA</b>). <a target="_blank" href="{!! URL::to('/informasijurusan') !!}">Lihat Detil Jurusan</a></p>
</div> -->
<!-- <div class="alert alert-danger">
	<p>Pastikan <b>JURUSAN</b> yang anda pilih sesuai dengan Jurusan di Sekolah anda (<b>IPA/IPS/BAHASA/AGAMA</b>). <a href="{!! URL::to('/informasijurusan') !!}">Lihat Detil Jurusan</a></p>
</div> -->

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary btn-large form-button']) !!}
</div>
