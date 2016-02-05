@extends('register.index')


@section('css')
@stop

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />

	{!! Form::model($app,['method' => 'PATCH','url' => ['/applicants']]) !!}
		<div class="form-group {{ ! $errors->first('full_name') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('full_name', 'Nama Lengkap') !!}
				</div>
				<div class="col-md-5">
				{!! Form::text('full_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Lengkap','disabled' => 'disabled']) !!}
				</div>
				@if( $errors->first('full_name') )
					<span class="help-block text-danger">{{ $errors->first('full_name') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('email') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('email', 'Alamat E-mail') !!}
				</div>
				<div class="col-md-5">
				{!! Form::email('email',Auth::user()->email ,['class' => 'form-control', 'placeholder' => 'Alamat E-mail', 'disabled' => 'disabled']) !!}
				</div>
				@if( $errors->first('email') )
					<span class="help-block text-danger">{{ $errors->first('email' ) }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('gender') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('gender', 'Jenis Kelamin') !!}&nbsp;&nbsp;
				</div>
				<div class="col-md-5">
				{!! Form::radio('gender', 1, 1) !!}
				{!! Form::label('Laki-laki','Laki-laki')!!}&nbsp;&nbsp;&nbsp;&nbsp;
				{!! Form::radio('gender', 0, 0) !!}
				{!! Form::label('Perampuan','Perempuan') !!}&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
				@if( $errors->first('gender') )
					<span class="help-block text-danger">{{ $errors->first('gender') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('place_birth') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('place_birth', 'Tempat Lahir') !!}
				</div>
				<div class="col-md-5">
				{!! Form::text('place_birth',null, ['class' => 'form-control','placeholder' => '...' ]) !!}
				</div>
				@if( $errors->first('place_birth') )
					<span class="help-block text-danger">{{ $errors->first('place_birth') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('date_birth') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('date_birth', 'Tanggal Lahir') !!}
				</div>
				<div class="col-md-5 form-inline">
					{!! Form::select('tanggal',$tanggal,$tanggal_lahir[2],['class' => 'form-control']) !!} &nbsp;
					<b>Bln&nbsp;</b>{!! Form::select('bulan',$bulan,$tanggal_lahir[1],['class' => 'form-control']) !!} &nbsp;
					<b>Thn&nbsp;</b>{!! Form::select('tahun',$tahun,$tanggal_lahir[0], ['class' => 'form-control']) !!} &nbsp;
				</div>
				@if( $errors->first('date_birth') )
					<span class="help-block text-danger">{{ $errors->first('date_birth') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('recitation', 'Jumlah Hafalan Al-Quran') !!}
				</div>
				<div class="col-md-3 form-inline">
				{!! Form::select('recitation',$listRecitation, $app->recitation, ['class' => 'form-control', 'placeholder' => '00']) !!} &nbsp;Juz
				</div>
				@if( $errors->first('recitation') )
					<span class="help-block text-danger">{{ $errors->first('recitation') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('color_blind', 'Buta Warna') !!}
				</div>
				<div class="col-md-2">
				{!! Form::select('color_blind', array('1' => 'Ya', '0' => 'Tidak'),$app->color_blind,['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('color_blind') )
					<span class="help-block text-danger">{{ $errors->first('color_blind') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('mental_disorder') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('mental_disorder', 'Riwayat Gangguan Mental') !!}
				</div>
				<div class="col-md-2">
				{!! Form::select('mental_disorder', array('1' => 'Ya', '0' => 'Tidak'),$app->mental_disorder, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('mental_disorder') )
					<span class="help-block text-danger">{{ $errors->first('mental_disorder') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('illness') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('illness', 'Penyakit yang sedang/pernah diderita') !!}
				</div>
				<div class="col-md-5">
				{!! Form::textarea('illness', null,['class' => 'form-control', 'placeholder' => 'Pisahkan dengan tanda koma, contoh: DBD, Tipus ','cols' => '50', 'rows' => '2']) !!}
				</div>
				@if( $errors->first('illness') )
					<span class="help-block text-danger">{{ $errors->first('illness') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('blood_type') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('blood_type', 'Golongan Darah') !!}
				</div>
				<div class="col-md-2">
				{!! Form::select('blood_type', array('A' => 'A', 'B' => 'B','AB' => 'AB','O' => 'O'),$app->blood_type,['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('blood_type') )
					<span class="help-block text-danger">{{ $errors->first('blood_type') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('weight') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('weight', 'Berat Badan') !!}
				</div>
				<div class="col-md-1">
				{!! Form::text('weight', null ,['class' => 'form-control', 'placeholder' => '00']) !!}
				</div>
				<div class="col-xs-1">
				   &nbsp;&nbsp;<b>Kg</b>
		    </div>
				@if( $errors->first('weight') )
					<span class="help-block text-danger">{{ $errors->first('weight') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('height') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('height', 'Tinggi Badan') !!}
				</div>
				<div class="col-md-1">
				{!! Form::text('height', null ,['class' => 'form-control', 'placeholder' => '000']) !!}
				</div>
				<div class="col-xs-1">
				   &nbsp;&nbsp;<b>Cm</b>
		    </div>
				@if( $errors->first('height') )
					<span class="help-block text-danger">{{ $errors->first('height') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('contact') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('contact', 'Telepon yang bisa dihubungi') !!}
				</div>
				<div class="col-md-5">
				{!! Form::text('contact', null ,['class' => 'form-control','placeholder' => 'Contoh: 08xxxxxxx']) !!}
				</div>
				@if( $errors->first('contact') )
					<span class="help-block text-danger">{{ $errors->first('contact') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('marriage_status') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('marriage_status', 'Sudah Menikah') !!}
				</div>
				<div class="col-md-5">
				{!! Form::select('marriage_status', array('0' => 'Belum', '1' => 'Sudah'),$app->marriage_status, ['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('marriage_status') )
					<span class="help-block text-danger">{{ $errors->first('marriage_status') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('address') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('address', 'Alamat') !!}
				</div>
				<div class="col-md-5">
				{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Contoh: Jl. Lap Banteng No. 05 RT:1/RW:3','cols' => '50', 'rows' => '2']) !!}
				</div>
				@if( $errors->first('address') )
					<span class="help-block text-danger">{{ $errors->first('address') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('kelurahan') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('Kelurahan', 'Desa/Kelurahan') !!}
				</div>
				<div class="col-md-5">
				{!! Form::text('kelurahan', null, ['class' => 'form-control', 'placeholder' => '...']) !!}
				</div>
				@if( $errors->first('kelurahan') )
					<span class="help-block text-danger">{{ $errors->first('kelurahan') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('kecamatan') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('kecamatan', 'Kecamatan') !!}
				</div>
				<div class="col-md-5">
				{!! Form::text('kecamatan', null, ['class' => 'form-control', 'placeholder' => '...']) !!}
				</div>
				@if( $errors->first('kecamatan') )
					<span class="help-block text-danger">{{ $errors->first('kecamatan') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('kabupaten') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('kabupaten', 'Kabupaten/Kota') !!}
				</div>
				<div class="col-md-5">
				{!! Form::text('kabupaten', null, ['class' => 'form-control', 'placeholder' => '...']) !!}
				</div>
				@if( $errors->first('kabupaten') )
					<span class="help-block text-danger">{{ $errors->first('kabupaten') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('province_id') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('province_id', 'Provinsi') !!}
				</div>
				<div class="col-md-5">
				{!! Form::select('province_id', $prov, $app->province_id,['class' => 'form-control']) !!}
				</div>
				@if( $errors->first('province_id') )
					<span class="help-block text-danger">{{ $errors->first('province_id') }}</span>
				@endif
			</div>
		</div>
		<br />
		<div class="form-group">
			{!! Form::submit('Selanjutnya', ['class' => 'btn btn-primary btn-large form-button btn-lg']) !!}
		</div>
	{!! Form::close() !!}

@stop

@section('script')
@stop
