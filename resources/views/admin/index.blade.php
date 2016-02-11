<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Program Beasiswa Santri Berprestasi (PBSB) - Administrator</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css') !!}

    <!-- MetisMenu CSS -->
    {!! Html::style('bower_components/metisMenu/dist/metisMenu.min.css') !!}

    <!-- Timeline CSS -->
    {!! Html::style('dist/css/timeline.css') !!}

    @yield('css')

    <!-- Custom CSS -->
    {!! Html::style('dist/css/sb-admin-2.css') !!}

    <!-- Morris Charts CSS -->
    {!! Html::style('bower_components/morrisjs/morris.css') !!}

    <!-- Custom Fonts -->
    {!! Html::style('bower_components/font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href={!! URL::to('admin/') !!}>Halaman Administrator</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              <!--   <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> Ganti Password</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                       <li class="divider"></li>
                        <li><a href="{!! URL::to('/auth/logout') !!}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                     /.dropdown-user
                </li> -->
                <li><a href="{!! URL::to('/admin/changepassword') !!}"><i class="fa fa-user fa-fw"></i> Ganti Password</a>
                </li>
                <li class="divider"></li>
                <li><a href="{!! URL::to('/auth/logout') !!}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{!! URL::to('/admin') !!}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Laporan Rekapitulasi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('admin/listprovinces') !!}">Rekap Provinsi</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('admin/listuniversities/') !!}">Rekap Universitas</a>
                                </li>
                                <li>
                                    <a href="{!! URL::to('admin/pesantren/') !!}">Rekap Pesantren</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Upload dan Download Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!! URL::to('admin/import') !!}">Upload Nomor Ujian</a>
                                </li>
                                <li>

                                    <a href="{!! URL::to('admin/export/') !!}">Download Data Pendaftar</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="{!! Request::is('provinces') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/provinces') !!}">Daftar Provinsi</a>
                                </li>
                                <li class="{!! Request::is('universities') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/universities') !!}">Daftar Universitas</a>
                                </li>
                                <li class="{!! Request::is('departements') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/departements') !!}">Daftar Jurusan</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Data Tambahan<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li class="{!! Request::is('edicationlevels') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/educationlevels') !!}">Tingkat Pendidikan</a>
                                </li>
                                <li class="{!! Request::is('jobtypes') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/jobtypes') !!}">Jenis Pekerjaan</a>
                                </li>

                                <li class="{!! Request::is('pesantrentypes') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/pesantrentypes') !!}">Jenis Pesantren</a>
                                </li>

                                <li class="{!! Request::is('programstudies') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/programstudies') !!}">Program Study</a>
                                </li>

                                <li class="{!! Request::is('rangesalaries') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/rangesalaries') !!}">Range Gaji</a>
                                </li>
                                <li class="{!! Request::is('schooltypes') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/schooltypes') !!}">Tipe Sekolah</a>
                                </li>
                                <li class="{!! Request::is('users') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/users') !!}">Daftar Pengguna</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-wrench fa-fw"></i> Pengaturan Aplikasi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <!-- <li class="{!! Request::is('tahunlahir') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/tahunlahir') !!}">Pengaturan Tahun Lahir</a>
                                </li> -->
                                <li class="{!! Request::is('tahunlulus') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/tahunlulus') !!}">Pengaturan Tahun Lulus</a>
                                </li>
                                <li class="{!! Request::is('pendaftaran') ? 'active' : '' !!}">
                                    <a href="{!! URL::to('admin/pendaftaran/1') !!}">Pengaturan Pendaftaran</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          <br />
          @if (Session::has('pesan'))
        		<div class="alert alert-danger">
        			<p>{{ Session::get('pesan') }}</p>
        		</div>
        	@endif
            <!-- <div class="alert alert-success"> -->
            <!-- Content will be place right here! -->
            @yield('content')
          <!-- </div> -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


    <!-- on top -->
    <!-- Morris Charts JavaScript -->
    {!! Html::script('bower_components/morrisjs/morris.min.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('js/morris-data.js', array('type' => 'text/javascript')) !!}
    {!! Html::script('bower_components/raphael/raphael-min.js', array('type' => 'text/javascript')) !!}

    <!-- jQuery -->
    {!! Html::script('bower_components/jquery/dist/jquery.min.js', array('type' => 'text/javascript')) !!}

    <!-- Bootstrap Core JavaScript -->
    {!! Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js', array('type' => 'text/javascript')) !!}

    <!-- Metis Menu Plugin JavaScript -->
    {!! Html::script('bower_components/metisMenu/dist/metisMenu.min.js', array('type' => 'text/javascript')) !!}

    @yield('script')


        <!-- Custom Theme JavaScript -->
    {!! Html::script('dist/js/sb-admin-2.js', array('type' => 'text/javascript')) !!}

</body>

</html>
