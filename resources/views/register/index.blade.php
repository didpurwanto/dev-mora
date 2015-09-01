<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DEVMORA</title>

    <!-- Bootstrap Core CSS -->
    {!! Html::style('homepage/css/bootstrap.min.css') !!}

    <!-- Custom CSS -->
    {!! Html::style('homepage/css/sb-admin.css') !!}

  	<!-- Morris Charts CSS -->
  	{!! Html::style('homepage/css/plugins/morris.css') !!}

    <!-- Custom Fonts -->
	  {!! Html::style('homepage/font-awesome/css/font-awesome.min.css') !!}

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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Didik Purwanto <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>

                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-left side-nav">
                    <li class="{!! Request::is('applicanthome') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/applicanthome') !!}"><i class="fa fa-fw fa-2x fa-dashboard icon-green"></i> Beranda</a>
                    </li>
                    <li class="{!! Request::is('applicants/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/applicants/edit') !!}"><i class="fa fa-fw fa-2x fa-user icon-green"></i> Biodata Pribadi</a>
                    </li>
                    <li class="{!! Request::is('families/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/families') !!}"><i class="fa fa-fw fa-2x fa-users icon-green"></i> Data Keluarga</a>
                    </li>
                    <li class="{!! Request::is('pesantrens/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/pesantrens') !!}"><i class="fa fa-fw fa-2x fa-institution icon-green"></i> Data Pesantren</a>
                    </li>
                    <li class="{!! Request::is('schools/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/schools') !!}"><i class="fa fa-fw fa-2x fa-building icon-green"></i> Data Sekolah</a>
                    </li>
                    <li class="{!! Request::is('raports/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/raports') !!}"><i class="fa fa-fw fa-2x fa-briefcase icon-green"></i> Data Raport</a>
                    </li>
                    <li class="{!! Request::is('applications/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/applications') !!}"><i class="fa fa-fw fa-2x fa-graduation-cap icon-green"></i> Pilihan Jurusan</a>
                    </li>
                    <li class="{!! Request::is('summary/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/summary') !!}"><i class="fa fa-fw fa-2x fa-desktop icon-green"></i> Rangkuman</a>
                    </li>
                    <li class="{!! Request::is('prints/*') ? 'active' : '' !!}">
                        <a href="{!! URL::to('/prints') !!}"><i class="fa fa-fw fa-2x fa-print icon-green"></i> Cetak Kartu</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!--load  isi -->
        <div id="page-wrapper">
			<div class="container-fluid">
				<br />
				<ol class="breadcrumb">
                  <li>
                     <b><font color="{!! Request::is('applicants*') ? 'red' : 'grey' !!}"> Langkah 1</font></b>
                  </li>
                  <li>
                    <b><font color="{!! Request::is('families*') ? 'red' : 'grey' !!}">Langkah 2</font></b>
                  </li>
                  <li>
                    <b><font color="{!! Request::is('pesantrens*') ? 'red' : 'grey' !!}">Langkah 3</font></b>
                  </li>
                  <li>
                    <b><font color="{!! Request::is('schools*') ? 'red' : 'grey' !!}">Langkah 4</font></b>
                  </li>
                  <li>
                    <b><font color="{!! Request::is('raports*') ? 'red' : 'grey' !!}">Langkah 5</font></b>
                  </li>
                  <li>
                    <b><font color="{!! Request::is('applications*') ? 'red' : 'grey' !!}">Langkah 6</font></b>
                  </li>
                  <li>
                    <b><font color="{!! Request::is('summary*') ? 'red' : 'grey' !!}">Summary</font></b>
                  </li>
              </ol>
				<div class="alert alert-success">
					<font color="black">
						@yield('content')
					</font>
				</div>
			</div>
		</div>

    </div>


    <!-- jQuery -->
    {!! Html::script('homepage/js/jquery.js', array('type' => 'text/javascript')) !!}

    <!-- Bootstrap Core JavaScript -->
	{!! Html::script('homepage/js/bootstrap.min.js', array('type' => 'text/javascript')) !!}

	<!-- Include another specific JavaScript  -->
	@yield('script')

	<!-- Morris Charts JavaScript-->
	{!! Html::script('homepage/js/plugins/morris/raphael.min.js', array('type' => 'text/javascript')) !!}

	{!! Html::script('homepage/js/plugins/morris/morris.min.js', array('type' => 'text/javascript')) !!}

	{!! Html::script('homepage/js/plugins/morris/morris-data.js', array('type' => 'text/javascript')) !!}

</body>

</html>
