@extends('admin.index')


@section('css')
	<!-- DataTables CSS -->
	{!! Html::style('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css') !!}
	<!-- DataTables Responsive CSS -->
	{!! Html::style('bower_components/datatables-responsive/css/dataTables.responsive.css') !!}

@stop


@section('content')

<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Rekapitulasi Pesantren</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-body">
							<div class="dataTable_wrapper">
							<div class="col-md-2 col-md-offset-5">
								<a class="btn btn-success" href="{!! URL::to('admin/DonwloadPesantren') !!}"><i class="glyphicon glyphicon-download-alt"></i> Download in excel</a>
							</div>

								<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
									<thead>
										<tr>
											<th>No</th>
											<th>Nama Pesantren</th>
											<th>Nama Kiai</th>
											<th>NSPP</th>
											<th>Provinsi</th>
										</tr>
									</thead>
									<tbody>
										@foreach ($pesantren as $ponpes)
										<tr>
											<td class="center col-md-1">
												{{ $counter = $counter+1, ['size' => 3] }}
										    </td>
											<td class="center col-md-3">
												{{ $ponpes->pesantren_name }}
											</td>
											<td class="center col-md-3">
												{{ $ponpes->kiai_name }}
											</td>
											<td class="center col-md-2">
												{{ $ponpes->nspp }}													
											</td>
											<td class="center col-md-3">
												{{ $ponpes->province_name }}
											</td>
										</tr>
											@endforeach
									</tbody>
						   		</table>
				 			</div>
					 </div>
 					<!-- /.panel-body -->
 			</div>
 			<!-- /.panel -->
 	</div>
 	<!-- /.col-lg-12 -->
</div>
 <!-- /.row -->

@stop


@section('script')
	<!-- DataTables JavaScript -->
	{!! Html::script('bower_components/datatables/media/js/jquery.dataTables.min.js', array('type' => 'text/javascript')) !!}
	{!! Html::script('bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js', array('type' => 'text/javascript')) !!}

	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	$(document).ready(function() {
			$('#tabel-provinsi').DataTable({
							responsive: true
			});
	});
	</script>

	<!-- Delete Data JavaScript - Jeffry Wayy -->
	{!! Html::script('js/laravel.js', array('type' => 'text/javascript')) !!}

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

@stop
