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
				<h1 class="page-header">Upload Nomor Ujian</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-body">

							<form action="upload" enctype="multipart/form-data" method="POST">
							    <input type="hidden" name="_token" value="{{ csrf_token() }}" />
							    <input name="file" type="file"/>
							    <hr />
						    <input value="upload" type="submit"/>
							</form>
							</div>
								<div class="dataTable_wrapper">
								<div class="panel-body">								
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>no registrasi</th>
													<th>Nama</th>
													<th>No test</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($application as $apl)
												<tr>
													<td class="center col-md-1">
														{{ $apl->registration_number }}
												    </td>
													<td class="center col-md-3">
														{{ $apl->full_name }}
													</td>
													<td class="center col-md-3">
														{{ $apl->test_number }}
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
