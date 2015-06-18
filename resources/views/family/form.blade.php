<div class="panel">
  <div class="panel-body">	
	<div class="form-group {{ ! $errors->first('father_name') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_name', 'Nama Ayah') !!}
				</div>
				<div class="col-md-4">
				{!! Form::text('father_name', null,['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('father_name') )
					<span class="help-block text-danger">{{ $errors->first('father_name') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('father_age') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_age', 'Usia') !!}
				</div>
				<div class="col-md-4 form-inline">
				{!! Form::text('father_age', null,['class' => 'form-control']) !!} &nbsp;&nbsp;Tahun
				</div>
				@if( $errors->first('father_age') )
					<span class="help-block text-danger">{{ $errors->first('father_age') }}</span>
				@endif
			</div>
	</div> 
	<div class="form-group {{ ! $errors->first('father_deceased') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_deceased', 'Almarhum') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('father_deceased', array('1' => 'Ya', '0' => 'Tidak'),0, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('father_deceased') )
					<span class="help-block text-danger">{{ $errors->first('father_deceased') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('father_education') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_education', 'Pendidikan Terakhir Ayah') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('father_education', $edu_level,1, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('father_education') )
					<span class="help-block text-danger">{{ $errors->first('father_education') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('father_job_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_job_id', 'Pekerjaan Ayah') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('father_job_id', $jobs,1, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('father_job_id') )
					<span class="help-block text-danger">{{ $errors->first('father_job_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('father_salary_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_salary_id', 'Penghasilan perbulan Ayah') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('father_salary_id', $salary,1, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('father_salary_id') )
					<span class="help-block text-danger">{{ $errors->first('father_salary_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('father_contact') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('father_contact', 'No. Handphone Ayah') !!}
				</div>
				<div class="col-md-4">
				{!! Form::text('father_contact', null ,['class' => 'form-control','placeholder' => '08XXXXXXXXXX']) !!}
				</div>
				@if( $errors->first('father_contact') )
					<span class="help-block text-danger">{{ $errors->first('father_contact') }}</span>
				@endif
			</div>
	</div>
 </div>
</div>
<div class="panel panel-default">
  <div class="panel-body">
	<div class="form-group {{ ! $errors->first('mother_name') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_name', 'Nama Ibu') !!}
				</div>
				<div class="col-md-4">
				{!! Form::text('mother_name', null,['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('mother_name') )
					<span class="help-block text-danger">{{ $errors->first('mother_name') }}</span>
				@endif
			</div>
	</div>
	
	<div class="form-group {{ ! $errors->first('mother_name') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_age', 'Usia') !!}
				</div>
				<div class="col-md-4 form-inline">
				{!! Form::text('mother_age', null,['class' => 'form-control']) !!}&nbsp;&nbsp; Tahun
				</div>
				@if( $errors->first('mother_name') )
					<span class="help-block text-danger">{{ $errors->first('mother_name') }}</span>
				@endif
			</div>
	</div> 
	<div class="form-group {{ ! $errors->first('mother_deceased') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_deceased', 'Almarhumah') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('mother_deceased', array('1' => 'Ya', '0' => 'Tidak'),0,['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('mother_deceased') )
					<span class="help-block text-danger">{{ $errors->first('mother_deceased') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('mother_education') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_education', 'Pendidikan Terakhir Ibu') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('mother_education', $edu_level,1, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('mother_education') )
					<span class="help-block text-danger">{{ $errors->first('mother_education') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('mother_job_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_job_id', 'Pekerjaan Ibu') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('mother_job_id', $jobs,1, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('mother_job_id') )
					<span class="help-block text-danger">{{ $errors->first('mother_job_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('mother_income_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_income_id', 'Penghasilan perbulan Ibu') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('mother_income_id', $salary,1, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('mother_income_id') )
					<span class="help-block text-danger">{{ $errors->first('mother_income_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('mother_contact') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mother_contact', 'No. Handphone Ibu') !!}
				</div>
				<div class="col-md-4">
				{!! Form::text('mother_contact', null ,['class' => 'form-control','placeholder' => '08XXXXXXXXXX']) !!}
				</div>
				@if( $errors->first('mother_contact') )
					<span class="help-block text-danger">{{ $errors->first('mother_contact') }}</span>
				@endif
			</div>
	</div>
 </div>
</div>

	<div class="form-group {{ ! $errors->first('address') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('address', 'Alamat Orang Tua') !!}
				</div>
				<div class="col-md-4">
				{!! Form::textarea('address', null, ['class' => 'form-control', 'cols' => '50', 'rows' => '2']) !!}
				</div>
				@if( $errors->first('address') )
					<span class="help-block text-danger">{{ $errors->first('address') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('province_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('province_id', 'Provinsi') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('province_id') )
					<span class="help-block text-danger">{{ $errors->first('province_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('kabupaten_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('kabupaten_id', 'Kabupaten') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('kabupaten_id', ['1' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('kabupaten_id') )
					<span class="help-block text-danger">{{ $errors->first('kabupaten_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group {{ ! $errors->first('kabupaten_id') ? '': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('kecamatan_id', 'Kecamatan') !!}
				</div>
				<div class="col-md-4">
				{!! Form::select('kecamatan_id', ['1' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('kabupaten_id') )
					<span class="help-block text-danger">{{ $errors->first('kabupaten_id') }}</span>
				@endif
			</div>
	</div>
	<div class="form-group">
		{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
	</div>