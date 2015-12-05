@extends('register.index')


@section('css')
	{!! Html::style('css/bootstrap-datepicker.min.css') !!}
	{!! Html::style('css/bootstrap-datepicker.standalone.min.css') !!}
	{!! Html::style('css/bootstrap-datepicker3.min.css') !!}
	{!! Html::style('css/bootstrap-datepicker3.standalone.min.css') !!}
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
				<div class="col-md-4">
				{!! Form::text('full_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
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
				<div class="col-md-4">
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
				<div class="col-md-4">
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
				<div class="col-md-4">
				{!! Form::text('place_birth',null, ['class' => 'form-control','placeholder' => 'Tempat Lahir' ]) !!}
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
				<div class="col-md-4">
				{!! Form::text('date_birth',$app->date_birth,['class' => 'form-control']) !!}
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
				<div class="col-md-4">
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
				<div class="col-md-4">
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
				<div class="col-md-4">
				{!! Form::textarea('illness', null,['class' => 'form-control', 'placeholder' => 'DBD, Tipus, ','cols' => '50', 'rows' => '2']) !!}
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
				<div class="col-md-4">
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
				<div class="col-md-3 form-inline">
				{!! Form::text('weight', null ,['class' => 'form-control', 'placeholder' => '00']) !!}&nbsp;&nbsp; Kg
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
				<div class="col-md-3 form-inline">
				{!! Form::text('height', null ,['class' => 'form-control', 'placeholder' => '000']) !!}&nbsp;&nbsp; Cm
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
				<div class="col-md-4">
				{!! Form::text('contact', null ,['class' => 'form-control','placeholder' => '08XXXXXXXXXX']) !!}
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
				<div class="col-md-4">
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
				<div class="col-md-4">
				{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Jl. Sakti No. 05 RT/RW 005/005 Kel. Sekijang','cols' => '50', 'rows' => '2']) !!}
				</div>
				@if( $errors->first('address') )
					<span class="help-block text-danger">{{ $errors->first('address') }}</span>
				@endif
			</div>
		</div>
		<div class="form-group {{ ! $errors->first('province_id') ?'': 'has-error' }}">
			<div class="row">
				<div class="col-md-3">
				{!! Form::label('province_id', 'Provinsi') !!}
				</div>
				<div class="col-md-4">
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
	{!! Html::script('js/bootstrap-datepicker.min.js', array('type' => 'text/javascript')) !!}
	<script>
	  $(function() {
		$( '#date_birth' ).datepicker({
			format: "yyyy-mm-dd",
			//language: "id",
			orientation: "bottom left",
		  autoclose: 1,
			defaultViewDate: { year: 2010, month: 04, day: 25 }
		  });
	  });
    </script>

	<script type="text/javascript">
    $(document).ready(function() {
        $("#province_id").change(function() {
            $.getJSON("/families/provinces/" + $("#province_id").val(), function(data) {
                var $stations = $("#kabupaten_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#kabupaten_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>

	<script type="text/javascript">
    $(document).ready(function() {
        $("#kabupaten_id").change(function() {
            $.getJSON("/families/kabupatens/" + $("#kabupaten_id").val(), function(data) {
                var $stations = $("#kecamatan_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#kecamatan_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>
@stop
