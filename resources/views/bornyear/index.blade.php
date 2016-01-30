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
				<h1 class="page-header">Tahun Lahir</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading">
								Tahun Lahir
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-2 col-md-offset-5">
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Tahun Lahir</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($tahun as $year)
												<tr>
													<td class="center col-md-1">
														{{ $year->id, ['size' => 5] }}
												  </td>
													<td>
														{{ $year->tahun_lahir }}
													</td>
													<td class="center col-md-2">
															<a class="btn btn-xs btn-success" href="{!! URL::to('admin/tahunlahir/'.$year->id.'/edit') !!}"><i class="fa fa-edit fa-fw"></i> Edit</a>
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

	<!-- Delete Data JavaScript - Jeffry Wayy -->
	{!! Html::script('js/laravel.js', array('type' => 'text/javascript')) !!}

@stop
