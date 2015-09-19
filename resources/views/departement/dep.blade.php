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
				<h1 class="page-header">Daftar Jurusan</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading">
								Daftar Jurusan
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-2 col-md-offset-5">
								<a class="btn btn-success" href="{!! URL::to('admin/departements/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Jurusan</a>
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>Nama Jurusan</th>
													<th>Nama Universitas</th>
													<th>Aksi</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($dep as $depart)
												<tr>
													<td class="center col-md-3">
														{{ $depart->departement_name }}
												  </td>
													<td>
														{{ $depart->getUniversityName() }}
													</td>
													<td class="center col-md-2">
															<a class="btn btn-xs btn-success" href="{!! URL::to('admin/departements/'.$depart->id.'/edit') !!}"><i class="fa fa-edit fa-fw"></i> Edit</a>
															&nbsp;&nbsp;
															<a class="btn btn-xs btn-danger" href="{!! URL::to('admin/departements/'.$depart->id) !!}" data-token="{{csrf_token()}}" data-method="delete" data-confirm="Anda yakin menghapus data Jurusan?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
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
@section('content')
	<h2>Daftar Departemen</h2>
	@foreach ($dep as $depart)
		<article>
			<h3>{{ $depart->departement_name }} In {{ $depart->getUniversityName() }}</h3>

		</article>
	@endforeach
@stop
