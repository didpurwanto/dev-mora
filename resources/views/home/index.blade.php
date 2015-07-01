<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PBSB Online -Dev</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="homepage/css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="homepage/font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="homepage/css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="homepage/css/creative.css" type="text/css">
	
	<!-- Include other spesific CSS -->
	@yield('css')
	
    <!-- VALIDATION SCRIPT-->
    <script language="JavaScript" src="js/gen_validatorv4.js"
      type="text/javascript" xml:space="preserve">
    </script>

</head>

<body id="page-top">
	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">PBSB Online</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#daftar">Buat Akun</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">PTN Mitra</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1>PORTAL PENDAFTARAN BEASISWA PBSB</h1>
                <br /><br />

                <a href="#daftar" class="btn btn-success btn-xl page-scroll">Buat Akun Sekarang</a>
                <a href="#login" class="btn btn-success btn-xl page-scroll">&nbsp&nbsp Login &nbsp Aplikasi &nbsp</a>
            </div>
        </div>
    </header>

    <section class="bg-success" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1>Login</h1>
                    <h3 class="section-heading">Silahkan isi username dan password Anda!</h3>
                    <br />

                    <form role="form" action="{!! url('applicanthome') !!}" method="post" name="myform" id="myform" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
					  <table align="center">
                        <tr>
                          <td>
                            <font color = "white" size="2px"><div id='myform_username_login_errorloc' class="error_strings"></div></font>
                            <input class="form-control" size="40" placeholder="Isi Username Anda!" name="username_login" id="username_login">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                        <tr>
                          <td>
                            <font color = "white" size="2px"><div id='myform_password_login_errorloc' class="error_strings"></div></font>
                            <input class="form-control" size="40" type="password" placeholder="Isi Password Anda!" name="password_login" id="password_login">
                          </td>
                        </tr>
                      </table>

                      <br />
                      <button href="{!! URL::to('applicanthome') !!}" class="btn btn-default btn-xl wow tada">Login Aplikasi</button>

                  </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-success" id="daftar">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <h1>Buat Akun</h1>
                    <h3 class="section-heading">Silahkan isi data Anda di bawah ini!</h3>
                    <br />
                    {!! Form::open(['url' => 'users']) !!}
                        <div class="form-group">
                            {!! Form::text('username', null, [ 'class'=> 'form-control', 'placeholder'=>'Isi Username Anda!', 'cols' => '10' ]) !!}
                        </div>
                       <div class="form-group">
                            {!! Form::text('email', null, [ 'class'=> 'form-control', 'placeholder'=>'Isi alamat email Anda!' ]) !!}
                        </div>
                       <div class="form-group">
                            {!! Form::password('password', [ 'class'=> 'form-control', 'placeholder'=>'Isi Password Anda!' ]) !!}
                        </div>
                        <div class="form-group" >
                            {!! Form::password('password2', [ 'class'=> 'form-control', 'placeholder'=>'Konfirmasi Password Anda!' ]) !!}
                        </div>

                       <div class="form-group" >
                            {!! Form::submit('Buat akun sekarang',['class'=>'btn btn-default btn-xl wow tada']) !!}
                        </div>

                    {!! Form::close() !!}
 <!--                    <form role="form" action="#" method="POST" name="myform" id="myform" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
					  <table align="center">
                        <tr>
                          <td>
                            <font color = "white" size="2px"><div id='myform_username_errorloc' class="error_strings"></div></font>
                            <input class="form-control" size="40" placeholder="Isi Username Anda!" name="username" id="username">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                        <tr>
                          <td>
                            <font color = "white" size="2px"><div id='myform_password_errorloc' class="error_strings"></div></font>
                            <input class="form-control" size="40" type="password" placeholder="Isi Password Anda!" name="password" id="password">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                        <tr>
                          <td>
                            <font color = "white" size="2px"><div id='myform_konfirmasi_errorloc' class="error_strings"></div></font>
                            <input class="form-control" size="40"  type="password" placeholder="Isi Konfirmasi Password Anda!" name="konfirmasi" id="konfirmasi">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <button href="#" class="btn btn-default btn-xl wow tada">Buat Akun Sekarang</button>

                  </form> -->
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">PTN Mitra PBSB</h2>

                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/its.png" alt="" />
                        <p class="text-muted">Institut Teknologi Sepuluh Nopember</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/its.png" alt="" />
                        <p class="text-muted">Institut Teknologi Sepuluh Nopember</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/its.png" alt="" />
                        <p class="text-muted">Institut Teknologi Sepuluh Nopember</p>
                    </div>
                </div>     
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/its.png" alt="" />
                        <p class="text-muted">Institut Teknologi Sepuluh Nopember</p>
                    </div>
                </div>                           
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="logo/kampus/itb.png" alt="" />
                        <p class="text-muted">Institut Teknologi Bandung</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="logo/kampus/unair.png" alt="" />
                        <p class="text-muted">Universitas Airlangga</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="logo/kampus/ipb.png" alt="" />
                        <p class="text-muted">Institut Pertanian Bogor</p>
                    </div>
                </div>



            </div>
        </div>
    </section>



    <section id="contact">
        <div class="bg-dark">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 >Kontak Kami</h2>
                    <p>
                      Silahkan menghubungi kami di kontak berikut jika mengalami kesulitan dalam proses pendaftaran
                    </p>
                </div>
                <div class="col-lg-4 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>085648077379</p>
                </div>
                <div class="col-lg-4 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:devmora@gmail.com"><font color="white">devmora@gmail.com</font></a></p>
                </div>
            </div>

        </div>
        <br />
        <table align="center">
          <tr>
            <td>
              Copyright (c) 2015 by devmora PBSB All right reserved
            </td>
          </tr>
        </table>


    </section>

    <!-- jQuery -->
    <script src="homepage/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="homepage/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="homepage/js/jquery.easing.min.js"></script>
    <script src="homepage/js/jquery.fittext.js"></script>
    <script src="homepage/js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="homepage/js/creative.js"></script>

	
	<!-- Include another specific JavaScript  -->
	@yield('script')
	
    <!-- VALIDATION SCRIPT-->
    	<script language="JavaScript" type="text/javascript"
    			xml:space="preserve">//<![CDATA[
    		//You should create the validator only after the definition of the HTML form
    	  	    var frmvalidator  = new Validator("myform");
    			frmvalidator.EnableOnPageErrorDisplay();
    			frmvalidator.EnableMsgsTogether();

    			frmvalidator.addValidation("username","req","Username harus diisi!");
          frmvalidator.addValidation("password","req","Passwordharus diisi!");
          frmvalidator.addValidation("konfirmasi","req","Konfirmasi Password harus diisi!");
          frmvalidator.addValidation("konfirmasi","eqelmnt=password","Konfirmasi dan Password harus sama!");

          frmvalidator.addValidation("username_login","req","Username harus diisi!");
          frmvalidator.addValidation("password_login","req","Passwordharus diisi!");
    	</script>

</body>

</html>
