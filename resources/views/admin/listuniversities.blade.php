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
				<h1 class="page-header">Rekapitulasi Universitas</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
<!-- 						<div class="panel-heading">
								Kode dan Nama Provinsi
						</div> -->

						<!-- /.panel-heading -->
						<div class="panel-body">
							<div class="col-md-2 col-md-offset-5">
								<!-- <a class="btn btn-success" href="{!! URL::to('admin/provinces/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Provinsi</a> -->
							<div class="form-group">
								{!! Form::label('university_id', 'Pilih Universitas :') !!}
								{!! Form::select('university_id',   array_merge(['0' => 'Semua Universitas'], $univ_list), ['class' => 'form-control']) !!}
							</div>
							</div>
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Jurusan</th>
													<th>Bidang</th>
													<th>Kode</th>
													<th>Jumlah</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($dept_list as $departement)
												<tr>
													<td class="center col-md-1">
														{{ $departement->id, ['size' => 3] }}
												    </td>
													<td class="center col-md-8">
														{{ $departement->departement_name }}
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
