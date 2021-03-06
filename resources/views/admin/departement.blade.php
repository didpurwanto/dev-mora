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
						<div class="panel-body">
							<div class="col-md-4 col-md-offset-4" >
							<br>
	
								{!! Form::model(null,['method' => 'POST','url' => 'admin/listdepartement']) !!}
								<!-- {!! Form::label('university_name', 'Pilih Universitas :') !!} -->
								{!! Form::select('university_id', array_merge(['0' => 'Pilih Universitas'], $univ_list), 0,['class' => 'form-control']) !!}
								<br>
								{!! Form::submit('Tampilkan data', ['class' => 'btn btn-primary form-control']) !!}
<!-- 								<div class="col-md-2 col-md-offset-2">
								<br>
									<a class="btn btn-success" href="{!! URL::to('admin/DonwloadDepartement') !!}"><i class="glyphicon glyphicon-download-alt"></i> Download in excel</a>
								</div> -->
	
								{!! Form::close() !!}
								 <br>
								<p class="navbar-text" align="center" style="font-size:14px"><b>Universitas : {!! $univ !!}<br>Jumlah Jurusan Aktif : {!! $totalAktif !!}</b></p>
							<br>
							</div>

							</div>
								<div class="dataTable_wrapper">
<!-- 									<div class="col-md-2 col-md-offset-5">
										<a class="btn btn-success" href="{!! URL::to('admin/DonwloadDepartement') !!}"><i class="glyphicon glyphicon-download-alt"></i> Download in excel</a>
									</div> -->
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Jurusan</th>
													<th>Kode</th>
													<th>Bidang</th>
													<th>Jumlah Pendaftar</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($dept as $departement)
												<tr>
													<td class="center col-md-1">
														{{ $counter = $counter+1 }}
												    </td>
													<td class="center col-md-6">
														{{ $departement->departement_name }}
													</td>
													<td class="center col-md-2">
														{{ $departement->departement_code }}
													</td>
													<td class="center col-md-2">
															IPA
													</td>
													<td class="center col-md-4">
														{{ $departement->total }}
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
	<script>
	 $(document).ready(function() {
	 $('select[name="university_id"]').change(function(){
		 	alert("aaa");
			var nilai = $(this).val() ;
			var url = "<?php echo URL::to('admin/listuniversities') ; ?>" ;
			$('a.tampilkan').attr('href', url+"/"+nilai);
		});
	});
	</script>
@stop

@section('script')
	<script type="text/javascript"></script>
		var e = document.getElementById("university_id");
		var strUniv = e.options[e.selectedIndex].value;
	</script>
@stop
