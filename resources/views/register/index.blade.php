<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendaftaran PBSB - Program Beasiswa Santri Berprestasi</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('css/bootstrap.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('css/sb-admin.css') !!}

  	<!-- Morris Charts CSS -->
  	{!! Html::style('css/plugins/morris.css') !!}

    <!-- Custom Fonts -->
	  {!! Html::style('font-awesome/css/font-awesome.min.css') !!}

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Include other spesific CSS -->
	@yield('css')

</head>

<body>

<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

			  <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{!! URL::to('/') !!}">Dev Mora Nasional</a>
            </div>

            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li>
                    <a href="#"><i class="fa fa-user"></i>&nbsp;&nbsp;{!! ucfirst(\Auth::user()->username); !!}</a>
                </li>
                <li>
                    <a href="{!! URL::to('/auth/logout') !!}"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-left side-nav">
                    <li class="{!! Request::is('applicanthome') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/applicanthome') !!}"><i class="fa fa-fw fa-dashboard icon-green"></i> Halaman Utama</a>
                    </li>
                    <li class="{!! Request::is('applicants') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/applicants') !!}"><i class="fa fa-fw fa-user icon-green"></i> Biodata Pribadi</a>
                    </li>
                    <li class="{!! Request::is('families') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/families') !!}"><i class="fa fa-fw fa-users icon-green"></i> Data Keluarga</a>
                    </li>
                    <li class="{!! Request::is('pesantrens') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/pesantrens') !!}"><i class="fa fa-fw fa-institution icon-green"></i> Data Pesantren</a>
                    </li>
                    <li class="{!! Request::is('schools') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/schools') !!}"><i class="fa fa-fw fa-building icon-green"></i> Data Sekolah</a>
                    </li>
                    <li class="{!! Request::is('raports') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/raports') !!}"><i class="fa fa-fw fa-briefcase icon-green"></i> Data Raport</a>
                    </li>
                    <li class="{!! Request::is('applications') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/applications') !!}"><i class="fa fa-fw fa-graduation-cap icon-green"></i> Pilihan Jurusan</a>
                    </li>
                    <li class="{!! Request::is('locationtests') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/locationtests') !!}"><i class="fa fa-fw fa-map-marker icon-green"></i> Pilihan Lokasi Tes</a>
                    </li>
                    <li class="{!! Request::is('summary') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/summary') !!}"><i class="fa fa-fw fa-desktop icon-green"></i> Rangkuman Data</a>
                    </li>
                    <li class="{!! Request::is('prints') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/prints') !!}"><i class="fa fa-fw fa-print icon-green"></i> Cetak Kartu</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!--load  isi -->
    <div id="page-wrapper">
			<div class="container-fluid">
				<br />
        @if (Session::has('pesan'))
      		<div class="alert alert-danger">
      			<p>{{ Session::get('pesan') }}</p>
      		</div>
      	@endif
				<div class="alert alert-success">
					<font color="black">
						@yield('content')
					</font>
				</div>
			</div>
		</div>

</div>


    <!-- jQuery -->
    {!! Html::script('js/jquery-1.11.1.min.js', array('type' => 'text/javascript')) !!}

    <!-- Bootstrap Core JavaScript -->
	{!! Html::script('js/bootstrap.min.js', array('type' => 'text/javascript')) !!}

	<!-- Include another specific JavaScript  -->
	@yield('script')

	<!-- Morris Charts JavaScript-->
	{!! Html::script('js/plugins/morris/raphael.min.js', array('type' => 'text/javascript')) !!}
	{!! Html::script('js/plugins/morris/morris.min.js', array('type' => 'text/javascript')) !!}
	{!! Html::script('js/plugins/morris/morris-data.js', array('type' => 'text/javascript')) !!}

</body>

</html>
