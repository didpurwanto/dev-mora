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
				<h1 class="page-header">Daftar Program Studi</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
				<div class="col-md-2 col-md-offset-5">
					<a class="btn btn-success" href="{!! URL::to('admin/programstudies/create') !!}"><i class="fa fa-floppy-o fa-fw"></i> Tambah Prodi</a><br>
				</div>
				<div>
				</div>
			<div class="panel-body">

				</div>

				<div class="dataTable_wrapper">
						<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
							<thead>
								<tr>
									<th>Kode Bidang</th>
									<th>Bidang</th>
									<th>Subjek Penilaian</th>
									<th>Aksi</th>

								</tr>
							</thead>
							<tbody>
								@foreach ($programs as $program)
								<tr>
									<td class="center col-md-1">
										{{ $program->prodi_code, ['size' => 3] }}
								    </td>
									<td class="center col-md-2">
										{{ $program->program_name, ['size' => 3] }}
								    </td>
									<td class="center col-md-7">
										{{ $program->list_subject, ['size' => 5] }}
									</td>
									<td class="center col-md-2">
											<a class="btn btn-xs btn-success" href="{!! URL::to('admin/programstudies/'.$program->id.'/edit') !!}"><i class="fa fa-edit fa-fw"></i> Edit</a>
											&nbsp;&nbsp;
											<a class="btn btn-xs btn-danger" href="{!! URL::to('admin/programstudies/'.$program->id) !!}" data-token="{{csrf_token()}}" data-method="delete" data-confirm="Anda yakin menghapus data ini?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
									</td>
								</tr>
								@endforeach
							</tbody>
				   </table>
		 		</div>
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
