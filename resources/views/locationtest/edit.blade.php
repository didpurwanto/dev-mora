@extends('register.index')

@section('content')
	<h2>Pilihan Lokasi Tes</h2>
	<hr />

	{!! Form::model($application,['method' => 'PATCH','url' => ['/locationtests']]) !!}
		@include ('locationtest.form', ['text' => 'Selanjutnya'])
	{!! Form::close() !!}
@stop

@section('script')
	<script type="text/javascript">
    $(document).ready(function() {
	   $('#province_id').change();
	});
	</script>

	<script type="text/javascript">
    $(document).ready(function() {
        $("#province_id").change(function(){
            $.getJSON("/applicants/lokasites/" + $("#province_id").val(), function(data) {
                var $stations = $("#location_name");
                $stations.empty();
								$stations.append('<option value="0">Lokasi Tes</option>');
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#location_name").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>

@stop
