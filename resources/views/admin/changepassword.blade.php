@extends('admin.index')

@section('content')
<div class="row">
		<div class="col-lg-12">
				<h1 class="page-header">Ganti Password Pengguna</h1>
		</div>
		<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
		<div class="col-lg-6">
				<div class="panel panel-default">
						<div class="panel-heading">Ganti Password Pengguna</div>
						<div class="panel-body">
								<div class="row">
									<div class="col-lg-12">
                    {!! Form::open(['url' => 'admin/changepassword']) !!}
                      <div class="form-group">
                      	{!! Form::label('Password_Lama', 'Password Saat Ini :') !!}
                      	{!! Form::password('Password_Saat_Ini', ['class' => 'form-control', 'placeholder'=>'Password Saat Ini']) !!}
                      </div>
                      <div class="form-group">
                      	{!! Form::label('Password', 'Password Baru :') !!}
                      	{!! Form::password('Password', ['class' => 'form-control', 'placeholder'=>'Password Baru']) !!}
                      </div>
                      <div class="form-group">
                      	{!! Form::label('Konfirmasi_Password', 'Konfirmasi Password Baru :') !!}
                        {!! Form::password('Konfirmasi_Password', ['class' => 'form-control', 'placeholder'=>'Konfirmasi Password Baru']) !!}
                      </div>
                      <div class="form-group">
                      	{!! Form::submit('Ganti Password', ['class' => 'btn btn-primary form-control']) !!}
                      </div>
                    {!! Form::close() !!}
									</div>
								</div>
								<!-- /.row (nested) -->
                <div class="row">
                  <div class="col-md-12">
                    @include('errors.list')
                  </div>
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
