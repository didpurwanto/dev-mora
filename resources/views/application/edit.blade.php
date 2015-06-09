@extends('layout')

@section('content')
	<h2>Pilihan Jurusan</h2>
	<hr />
	
	{!! Form::model($appl,['method' => 'PATCH','url' => ['/applications',$appl->id]]) !!}
		@include ('application.form', ['text' => 'Next'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop

@section('script')
	<script type="text/javascript">
    $(document).ready(function() {
        $("#university_id").change(function() {
            $.getJSON("/applications/universities/" + $("#university_id").val(), function(data) {
                var $stations = $("#departement_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#departement_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>
@stop