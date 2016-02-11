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
						<div class="panel-body">
							<div class="alert alert-warning" role="alert">
								<h4>  Daftar universitas: </h4>
								@foreach ($univ as $university)
									<td class="center col-md-2">
										{{ $university->university_code }} :
									</td> 
									<td class="center col-md-2">
										{{ $university->university_name }}
									</td>
									<br>								
								@endforeach
							</div>
								<div class="dataTable_wrapper">
										<div class="col-md-2 col-md-offset-5">
											<a class="btn btn-success" href="{!! URL::to('admin/DownloadProvince') !!}"><i class="glyphicon glyphicon-download-alt"></i> Download in excel</a>
											<!-- <br>
											<p class="navbar-text" align="center" style="font-size:14px"><b>Jumlah pendaftar : {!! $totalApplication !!}</b></p> -->
										</div>
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Provinsi</th>
													@foreach ($univ as $university)
														<th> {{ $university->university_code }}</th>
													@endforeach
													<th>Total</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($prov_list as $province)
												<tr>
													<td class="center col-md-1">
														{{ $counter = $counter+1, ['size' => 3] }}
												    </td>
													<td class="center col-md-8">
														{{ $province->province_name }}
													</td>
													<!-- <td class="center col-md-1"> -->
													@foreach ($univ as $university)
														<th>
															{{ $data[$province->province_name][$university->university_name] }}
														</th>
													@endforeach
													</td>
													<td>
														{{ $province->total }}
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
