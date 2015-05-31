@extends('layout')

@section('content')
	<h2>Biodata Keluarga</h2>
	<hr />
	
	{!! Form::model($fam,['method' => 'PATCH','url' => ['/families',$fam->id]]) !!}
		@include ('family.form', ['text' => 'Update'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop

@section('script')
	<script type="text/javascript">
    $(document).ready(function() {
        $("#father_province_id").change(function() {
            $.getJSON("/families/provinces/" + $("#father_province_id").val(), function(data) {
                var $stations = $("#father_kabupaten_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#father_kabupaten_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>
	
	<script type="text/javascript">
    $(document).ready(function() {
        $("#father_kabupaten_id").change(function() {
            $.getJSON("/families/kabupatens/" + $("#father_kabupaten_id").val(), function(data) {
                var $stations = $("#father_kecamatan_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#father_kecamatan_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>
@stop