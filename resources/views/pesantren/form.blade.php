<div class="form-group {{ ! $errors->first('pesantren_name') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('pesantren_name', 'Nama Pesantren') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('pesantren_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Pesantren']) !!}
		</div>
		@if( $errors->first('pesantren_name') )
			<span class="help-block text-danger">{{ $errors->first('pesantren_name') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('kiai_name') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('kiai_name', 'Nama Pimpinan') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('kiai_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Kiyai']) !!}
		</div>
		@if( $errors->first('kiai_name') )
			<span class="help-block text-danger">{{ $errors->first('kiai_name') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('nspp') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('nspp', 'NSPP') !!}
		</div>
		<div class="col-md-4">
		{!! Form::text('nspp', null,['class' => 'form-control', 'placeholder' => 'Nomor Statistik Pondok Pesantren']) !!}
		</div>
		@if( $errors->first('nspp') )
			<span class="help-block text-danger">{{ $errors->first('nspp') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('pesantren_type') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('pesantren_type', 'Jenis Pesantren') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('pesantren_type', $pes_type,$pes->pesantren_type,['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group {{ ! $errors->first('pesantren_address') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('pesantren_address', 'Alamat Pesantren') !!}
		</div>
		<div class="col-md-4">
		{!! Form::textarea('pesantren_address', null,['class' => 'form-control', 'placeholder' => 'Jl. Keramat Jati, No. 5, RT/RW 05/05, Kel. Sukajadi', 'cols' => '50', 'rows' => '2']) !!}
		</div>
		@if( $errors->first('pesantren_address') )
			<span class="help-block text-danger">{{ $errors->first('pesantren_address') }}</span>
		@endif
	</div>
</div>
<div class="form-group {{ ! $errors->first('province_id') ? '': 'has-error' }}">
	<div class="row">
		<div class="col-md-3">
		{!! Form::label('province_id', 'Provinsi') !!}
		</div>
		<div class="col-md-4">
		{!! Form::select('province_id', $prov, $pes->province_id,['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
</div>
