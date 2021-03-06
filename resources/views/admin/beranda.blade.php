@extends('admin.index')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Selamat datang di halaman administrator!</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>

<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!!  $total_pendaftar !!}</div>
                        <div> membuat akun!</div>
                    </div>
                </div>
            </div>            
            <a href={!! URL::to('admin/listprovinces/') !!}>
                <div class="panel-footer">
                    <span class="pull-left">Rekap Provinsi</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

        <div class="col-lg-3 col-md-6">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!!  $total_submitter !!}</div>
                        <div>Pendaftar</div>
                    </div>
                </div>
            </div>
            <a href={!! URL::to('admin/listuniversities') !!}>
                <div class="panel-footer">
                    <span class="pull-left"></span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!! $total_pesantren !!}</div>
                        <div> total pesantren!</div>
                    </div>
                </div>
            </div>
            <a href={!! URL::to('admin/pesantren/') !!}>
                <div class="panel-footer">
                    <span class="pull-left">Rekap Pesantren</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{!!  $total_univ !!}</div>
                        <div>total Universitas!</div>
                    </div>
                </div>
            </div>
            <a href={!! URL::to('admin/listuniversities/') !!}>
                <div class="panel-footer">
                    <span class="pull-left">Rekap Universitas</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>


@stop
