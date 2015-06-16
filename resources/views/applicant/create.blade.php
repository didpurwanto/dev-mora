@extends('register.index')


@section('css')
	{!! Html::style('css/bootstrap-datepicker.min.css') !!}
@stop

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />
	
	{!! Form::open(['url' => '/applicants','files' => true]) !!}
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('full_name', 'Nama Lengkap') !!}
				</div>
				<div class="col-md-3">
				{!! Form::text('full_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-md-offset-2">
				@if( $errors->first('full_name') )
					<span class="help-block text-danger">{!! $errors->first('full_name') !!}</span>
				@endif
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('email', 'Alamat E-mail') !!}
				</div>
				<div class="col-md-3">
				{!! Form::email('email',null ,['class' => 'form-control', 'placeholder' => 'Alamat E-mail']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('gender', 'Jenis Kelamin') !!}&nbsp;&nbsp;
				</div>
				<div class="col-md-3">
				{!! Form::radio('gender', 1, 1) !!}
				{!! Form::label('Laki-laki','Laki-laki')!!}&nbsp;&nbsp;&nbsp;&nbsp;
				{!! Form::radio('gender', 0, 0) !!}
				{!! Form::label('Perampuan','Perempuan') !!}&nbsp;&nbsp;&nbsp;&nbsp;
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('place_birth', 'Tempat Lahir') !!}
				</div>
				<div class="col-md-3">
				{!! Form::text('place_birth',null, ['class' => 'form-control','placeholder' => 'Tempat Lahir' ]) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('date_birth', 'Tanggal Lahir') !!}
				</div>
				<div class="col-md-3">
				{!! Form::text('date_birth', null,['placeholder' => 'YYYY-MM-DD', 'id' => 'datepicker', 'class' => 'form-control', 'data-date-format' => 'yyyy-mm-dd', 'data-date-viewmode' => 'years']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('recitation', 'Jumlah Hafalan Al-Quran') !!}
				</div>
				<div class="col-md-3 form-inline">
				{!! Form::text('recitation', null, ['class' => 'form-control', 'placeholder' => '00']) !!} &nbsp;Juz
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('color_blind', 'Buta Warna') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('color_blind', array('1' => 'Ya', '0' => 'Tidak'),1,['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('mental_disorder', 'Riwayat Gangguan Mental') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('mental_disorder', array('1' => 'Ya', '0' => 'Tidak'),0, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('illness', 'Penyakit yang sedang/pernah diderita') !!}
				</div>
				<div class="col-md-3">
				{!! Form::textarea('illness', null,['class' => 'form-control', 'placeholder' => 'DBD, Tipus, ','cols' => '50', 'rows' => '2']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('blood_type', 'Golongan Darah') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('blood_type', array('A' => 'A', 'B' => 'B','AB' => 'AB','O' => 'O'),1,['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('weight', 'Berat Badan') !!}
				</div>
				<div class="col-md-3 form-inline">
				{!! Form::text('weight', null ,['class' => 'form-control', 'placeholder' => '00']) !!}&nbsp;&nbsp; Kg
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('height', 'Tinggi Badan') !!}
				</div>
				<div class="col-md-3 form-inline">
				{!! Form::text('height', null ,['class' => 'form-control', 'placeholder' => '000']) !!}&nbsp;&nbsp; Cm
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('contact', 'Telepon yang bisa dihubungi') !!}
				</div>
				<div class="col-md-3">
				{!! Form::text('contact', null ,['class' => 'form-control','placeholder' => '08XXXXXXXXXX']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('marriage_status', 'Sudah Menikah') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('marriage_status', array('1' => 'Sudah', '0' => 'Belum'),0, ['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('address', 'Alamat') !!}
				</div>
				<div class="col-md-3">
				{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Jl. Sakti No. 05 RT/RW 005/005 Kel. Sekijang','cols' => '50', 'rows' => '2']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('province_id', 'Provinsi') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('kabupaten_id', 'Kabupaten') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('kabupaten_id', ['0' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-2">
				{!! Form::label('kecamatan_id', 'Kecamatan') !!}
				</div>
				<div class="col-md-3">
				{!! Form::select('kecamatan_id', ['0' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
				</div>
			</div>
		</div>
		
			<div class="form-group">
			{!! Form::label('Pas Photo') !!}
			{!! Form::file('photo', null, ['id' => 'picture']) !!}
			</div>
			<div class="form-group">
			{!! Form::submit('Simpan', ['class' => 'btn btn-primary form-button']) !!}
		</div>

	{!! Form::close() !!}
	@include('errors.list')
@stop

@section('script')
	{!! Html::script('js/bootstrap-datepicker.min.js', array('type' => 'text/javascript')) !!}
	<script>
	  $(function() {
		$( '#datepicker' ).datepicker();
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