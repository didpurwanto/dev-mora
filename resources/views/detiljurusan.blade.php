<div class="row">
		<div class="col-lg-12">
				<div class="panel panel-default">
						<div class="panel-heading">
									Tipe Sekolah
						</div>
						<!-- /.panel-heading -->
						<div class="panel-body">
								<div class="dataTable_wrapper">
										<table class="table table-striped table-bordered table-hover" id="tabel-provinsi">
											<thead>
												<tr>
													<th>No</th>
													<th>Nama Universitas</th>
													<th>Jurusan</th>
												</tr>
											</thead>
											<tbody>
												@foreach ($deps as $dep)
                        <tr>
													<td class="center col-md-1">
														{{ $dep->id, ['size' => 5] }}
												  </td>
													<td>
														{{ $dep->departement_name }}
													</td>
													<td class="center col-md-2">
                            <p>Contoh</p>
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
