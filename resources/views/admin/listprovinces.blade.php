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
				<h1 class="page-header">Rekapitulasi Perprovinsi</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
				<h4>  Daftar universitas: </h4>
						<div class="panel-body">
							<div class="center col-md-4">
								@foreach ($univ_list as $university)
									<td class="center col-md-2">
										{{ $university->university_code }} --
									</td> 
									<td class="center col-md-2">
										{{ $university->university_name }}
									</td>
									<br>								
								@endforeach
								<br>							
							</div>

							<div class="col-md-2 col-md-offset-5">
								<!-- <a class="btn btn-success" href="{!! URL::to('admin/provinces/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Provinsi</a> -->
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Provinsi</th>
													<th>Univ 1</th>
													<th>Univ 2</th>
													<th>Univ 3</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($prov_list as $province)
												<tr>
													<td class="center col-md-1">
														{{ $province->id, ['size' => 3] }}
												    </td>
													<td class="center col-md-8">
														{{ $province->province_name }}
													</td>
													<td class="center col-md-1">
															100
													</td>
													<td class="center col-md-1">
															100
													</td>

													<td class="center col-md-1">
															100
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
