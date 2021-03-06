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
				<h1 class="page-header">Jenis Sekolah</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<!-- <div class="panel-heading">
									Jenis Sekolah
						</div>
						 --><!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-2 col-md-offset-5">
								<a class="btn btn-success" href="{!! URL::to('admin/schooltypes/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Jenis Sekolah</a>
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<!-- <th>no</th> -->
													<th>Kode</th>
													<th>Jenis Sekolah</th>
													<th>Batas umur</th>
													<th>Batas tahun lulus</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($schooltype as $type)
												<tr>
<!-- 													<td class="center col-md-1">
														{{ $type->id, ['size' => 5] }}
												  </td>
 -->													<td class="center col-md-1">
														{{ $type->type_code }}
													</td>
													<td class="center col-md-4">
														{{ $type->type_name }}
													</td>
													<td class="center col-md-2">
														{{ $type->max_age }}
													</td>
													<td class="center col-md-2">
														{{ $type->max_graduate }}
													</td>
													<td class="center col-md-2">
															<a class="btn btn-xs btn-success" href="{!! URL::to('admin/schooltypes/'.$type->id.'/edit') !!}"><i class="fa fa-edit fa-fw"></i> Edit</a>
															&nbsp;&nbsp;
															<a class="btn btn-xs btn-danger" href="{!! URL::to('admin/schooltypes/'.$type->id) !!}" data-token="{{csrf_token()}}" data-method="delete" data-confirm="Anda yakin menghapus data ini?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
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
