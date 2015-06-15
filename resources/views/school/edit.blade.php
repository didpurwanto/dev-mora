@extends('register.index')

@section('content')
	<h2>Data Pesantren</h2>
	<hr />
	
	{!! Form::model($sch,['method' => 'PATCH','url' => ['/schools',$sch->id]]) !!}
		@include ('school.form', ['text' => 'Simpan'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop

@section('script')
	
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