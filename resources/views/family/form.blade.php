<div class="panel panel-primary">
 <div class="panel-body">
	<div class="form-group">
		{!! Form::label('father_name', 'Nama Ayah :') !!}
		{!! Form::text('father_name', null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_age', 'Usia :') !!}
		{!! Form::text('father_age', null,['class' => 'form-control']) !!} Tahun
	</div> 
	<div class="form-group">
		{!! Form::label('father_deceased', 'Hidup/ Almarhum :') !!}
		{!! Form::select('father_deceased', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_address', 'Alamat :') !!}
		{!! Form::textarea('father_address', null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_province_id', 'Provinsi :') !!}
		{!! Form::select('father_province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_kabupaten_id', 'Kabupaten :') !!}
		{!! Form::select('father_kabupaten_id', ['1' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_kecamatan_id', 'Kecamatan :') !!}
		{!! Form::select('father_kecamatan_id', ['1' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_education_id', 'Pendidikan Terakhir :') !!}
		{!! Form::select('father_education_id', array('SD' => 'SD', 'SMP/MTs' => 'SMP/MTs', 'SMA/SMK/MA' => 'SMA/SMK/MA', 'S1' => 'S1', 'S2' => 'S2', 'S3' => 'S3'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_job_id', 'Pekerjaan :') !!}
		{!! Form::select('father_job_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('father_income_id', 'Penghasilan perbulan :') !!}
		{!! Form::select('father_income_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
	</div>
 </div>
</div>


<div class="panel panel-primary">
 <div class="panel-body">
	<div class="form-group">
		{!! Form::label('mother_name', 'Nama Ibu :') !!}
		{!! Form::text('mother_name', null,['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mother_age', 'Usia :') !!}
		{!! Form::text('father_age', null,['class' => 'form-control']) !!} Tahun
	</div> 
	<div class="form-group">
		{!! Form::label('mother_deceased', 'Hidup/ Almarhumah :') !!}
		{!! Form::select('mother_deceased', array('1' => 'Ya', '0' => 'Tidak'), 'Pilih', ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::checkbox('alamat', 1, 'alamat', ['id' => 'alamat'])!!}
		{!! Form::label('alamat', 'Sama dengan Alamat Ayah.') !!}
	</div>
	<div id="alamat_ibu">
		<div class="form-group">
			{!! Form::label('mother_address', 'Alamat :') !!}
			{!! Form::textarea('mother_address', null, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mother_province_id', 'Provinsi :') !!}
			{!! Form::select('mother_province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mother_kabupaten_id', 'Kabupaten :') !!}
			{!! Form::select('mother_kabupaten_id', ['1' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mother_kecamatan_id', 'Kecamatan :') !!}
			{!! Form::select('mother_kecamatan_id', ['1' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
		</div>
	</div>
	<div class="form-group">
		{!! Form::label('mother_education_id', 'Pendidikan Terakhir :') !!}
		{!! Form::select('mother_education_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mother_job_id', 'Pekerjaan :') !!}
		{!! Form::select('mother_job_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('mother_income_id', 'Penghasilan perbulan :') !!}
		{!! Form::select('mother_income_id', array('1' => 'Ya', '1' => 'Tidak'), ['class' => 'form-control']) !!}
	</div>
 </div>
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
	{!! Form::reset('Cancel', ['class' => 'btn btn-primary form-button']) !!}
</div>