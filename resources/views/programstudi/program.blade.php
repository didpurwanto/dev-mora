@extends('admin.index')

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
									<th>Bidang</th>
									<th>Subjek Penilaian</th>
									<th>Aksi</th>

								</tr>
							</thead>
							<tbody>
								@foreach ($programs as $program)
								<tr>
									<td class="center col-md-1">
										{{ $program->program_name, ['size' => 3] }}
								    </td>
									<td class="center col-md-8">
										{{ $program->list_subject, ['size' => 5] }}
									</td>
									<td class="center col-md-2">
											<a class="btn btn-xs btn-success" href="{!! URL::to('admin/programstudies/'.$program->id.'/edit') !!}"><i class="fa fa-edit fa-fw"></i> Edit</a>
											&nbsp;&nbsp;
											<a class="btn btn-xs btn-danger" href="{!! URL::to('admin/programstudies/'.$program->id) !!}" data-token="{{csrf_token()}}" data-method="delete" data-confirm="Anda yakin menghapus data Jurusan?"><i class="fa fa-remove fa-fw"></i> Hapus</a>
									</td>									
								</tr>
								@endforeach
							</tbody>
				   </table>
		 		</div>
		 	</div>
@stop
