@extends('register.index')

@section('content')
	<h2>Pilihan Jurusan</h2>
	<hr />
	
	{!! Form::model($appl,['method' => 'PATCH','url' => ['/applications',$appl->id]]) !!}
		@include ('application.form', ['text' => 'Simpan'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop

@section('script')
	<script type="text/javascript">
    $(document).ready(function() {
	   $('#university_id').change();
	});
	</script>
	
	<script type="text/javascript">
    $(document).ready(function() {
        $("#university_id").change(function(){
            $.getJSON("/applications/universities/" + $("#university_id").val(), function(data) {
                var $stations = $("#major_1_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#major_1_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>
	
	<script type="text/javascript">
    $(document).ready(function() {
        $("#university_id").change(function(){
            $.getJSON("/applications/universities/" + $("#university_id").val(), function(data) {
                var $stations = $("#major_2_id");
                $stations.empty();
                $.each(data, function(index, value) {
                    $stations.append('<option value="' + index +'">' + value + '</option>');
                });
            $("#major_2_id").trigger("change"); /* trigger next drop down list not in the example */
            });
        });
    });
	</script>
@stop