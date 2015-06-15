@extends('register.index')


@section('css')
	{!! Html::style('css/bootstrap-datepicker.min.css') !!}
@stop

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />
	
	{!! Form::open(['url' => '/applicants','files' => true]) !!}
		<div class="form-group">
			{!! Form::label('full_name', 'Nama Lengkap :') !!}
			{!! Form::text('full_name',null ,['class' => 'form-control', 'placeholder' => 'Nama Lengkap']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Alamat E-mail :') !!}
			{!! Form::email('email',null ,['class' => 'form-control', 'placeholder' => 'Alamat E-mail']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('gender', 'Jenis Kelamin :') !!}&nbsp;&nbsp;
			{!! Form::radio('gender', 1, 1) !!}
			{!! Form::label('Laki-laki','Laki-laki')!!}&nbsp;&nbsp;&nbsp;&nbsp;
			{!! Form::radio('gender', 0, 0) !!}
			{!! Form::label('Perampuan','Perempuan') !!}&nbsp;&nbsp;&nbsp;&nbsp;
		</div> 
		<div class="form-group">
			{!! Form::label('place_birth', 'Tempat Lahir :') !!}
			{!! Form::text('place_birth',null, ['class' => 'form-control','placeholder' => 'Tempat Lahir' ]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('date_birth', 'Tanggal Lahir :') !!}
			{!! Form::text('date_birth', null, ['placeholder' => 'YYYY-MM-DD', 'id' => 'datepicker', 'class' => 'form-control', 'data-date-format' => 'yyyy-mm-dd', 'data-date-viewmode' => 'years']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('recitation', 'Jumlah Hafalan Al-Quran :') !!}
			{!! Form::text('recitation', null, ['class' => 'form-control', 'placeholder' => '00']) !!}&nbsp;&nbsp; Juz
		</div>
		<div class="form-group">
			{!! Form::label('color_blind', 'Buta Warna :') !!}
			{!! Form::select('color_blind', array('1' => 'Ya', '0' => 'Tidak'),['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('mental_disorder', 'Riwayat Gangguan Mental :') !!}
			{!! Form::select('mental_disorder', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('illness', 'Penyakit yang sedang/pernah diderita :') !!}
			{!! Form::textarea('illness', null,['class' => 'form-control', 'placeholder' => 'DBD, Tipus, ']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('blood_type', 'Golongan Darah :') !!}
			{!! Form::select('blood_type', array('A' => 'A', 'B' => 'B','AB' => 'AB','O' => 'O'),['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('weight', 'Berat Badan :') !!}
			{!! Form::text('weight', null ,['class' => 'form-control', 'placeholder' => '00']) !!}&nbsp;&nbsp; KG
		</div>
		<div class="form-group">
			{!! Form::label('height', 'Tinggi Badan :') !!}
			{!! Form::text('height', null ,['class' => 'form-control', 'placeholder' => '000']) !!}&nbsp;&nbsp; CM
		</div>
		<div class="form-group">
			{!! Form::label('contact', 'Telepon yang bisa dihubungi :') !!}
			{!! Form::text('contact', null ,['class' => 'form-control','placeholder' => '08XXXXXXXXXX']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('marriage_status', 'Sudah Menikah :') !!}
			{!! Form::select('marriage_status', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
				{!! Form::label('address', 'Alamat :') !!}
				{!! Form::textarea('address', null, ['class' => 'form-control', 'placeholder' => 'Jl. Sakti No. 05 RT/RW 005/005 Kel. Sekijang']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('province_id', 'Provinsi :') !!}
			{!! Form::select('province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('kabupaten_id', 'Kabupaten :') !!}
			{!! Form::select('kabupaten_id', ['0' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('kecamatan_id', 'Kecamatan :') !!}
			{!! Form::select('kecamatan_id', ['0' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
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