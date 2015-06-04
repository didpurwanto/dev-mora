@extends('layout')


@section('css')
	{!! Html::style('css/bootstrap-datepicker.min.css') !!}
@stop

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />
	
	{!! Form::model($app,['method' => 'PATCH','url' => ['/applicants',$app->id], 'files' => true]) !!}
		@include ('applicant.form', ['text' => 'Lanjutkan'])
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