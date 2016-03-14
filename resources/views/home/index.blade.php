<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
       "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pendaftaran PBSB - Program Beasiswa Santri Berprestasi</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

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
                        <a class="page-scroll" href="#login">Login</a>
                    </li>
                    @if ($close == 0)

                    <li>
                        <a class="page-scroll" href="#daftar">Buat Akun</a>
                    </li>
                    @endif
                    <li>
                        <a class="page-scroll" href="#services">PTN Mitra</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Kontak</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{ url('/auth/login') }}">Admin</a>
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
                <font face="verdana" size="6.5 px">
                <b>
                Pendaftaran Program <br />
                Beasiswa Santri Berprestasi (PBSB) <br />
                Kementerian Agama <br />
                2016
                </b>
                </font>

                <br /><br /><br /><br />
                @if ($close == 0)
                <a href="#daftar" class="btn btn-success btn-xl page-scroll">Buat Akun Sekarang</a>
                @endif
                <a href="#login" class="btn btn-success btn-xl page-scroll">&nbsp&nbsp Login &nbsp Aplikasi &nbsp</a>
                <br /><br /><br /><br /><br /><br /><br /><br />

            </div>
        </div>
    </header>
    @if (Session::has('pesan'))
      <div class="alert alert-danger">
        <p>{{ Session::get('pesan') }}</p>
      </div>
    @endif
    @if ($close == 1)
        <br />
        <div class="alert alert-danger">
          <p align="center">PENDAFTARAN TELAH DITUTUP</p>
        </div>
    @endif
    <section class="bg-success" id="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1>Login</h1>
                    <h3 class="section-heading">Silahkan masukkan username dan password Anda!</h3>
                    <br />

                    <form role="form" action="{{ url('/auth/login') }}" method="post" name="myform" id="myform" enctype="multipart/form-data">
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
					            <table align="center">
                        <tr>
                          <td>
                            <font color = "red" size="2px">
                              <div id='myform_username_login_errorloc' class="error_strings">
                                @if ($errors->first('email_login'))
                                		<ul class="alert alert-danger">
                                				<li>{{ $errors->first('email_login') }}</li>
                                		</ul>
                                @endif
                             </div></font>
                            <input class="form-control" size="40" placeholder="Isi Username Anda!" name="username" id="username">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                        <tr>
                          <td>
                            <font color = "white" size="2px"><div id='myform_password_login_errorloc' class="error_strings"></div></font>
                            <input class="form-control" size="40" type="password" placeholder="Isi Password Anda!" name="password" id="password">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <button type="submit" class="btn btn-default btn-xl wow tada">Login Aplikasi</button>
                      <a href="{{ url('/password/email') }}">Lupa Password?</a>

                  </form>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-success" id="daftar">
      @if ($close == 0)
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                  <h1>Buat Akun</h1>
                    <h3 class="section-heading">Silahkan lengkapi data Anda di bawah ini!</h3>
                    <br />
              <form role="form" action="{!! url('auth/register') !!}" method="POST" name="myform" id="myform" enctype="multipart/form-data">
                    <?php
                        $encrypter = app('Illuminate\Encryption\Encrypter');
                            $encrypted_token = $encrypter->encrypt(csrf_token());
                     ?>
                      <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <table align="center">
                        <tr>
                          <td>
                          <font color = "white" size="2px">
                            <div id='myform_username_errorloc' class="error_strings">
                              @if($errors->any())
                                <ul class="alert alert-danger">
                                @if ($errors->first('jenis_school'))
                                    <li>{{ $errors->first('jenis_school') }}</li>
                                @endif
                                @if ($errors->first('username'))
                                    <li>{{ $errors->first('username') }}</li>
                                @endif
                                @if ($errors->first('full_name'))
                                    <li>{{ $errors->first('full_name') }}</li>
                                @endif
                                @if ($errors->first('email'))
                                    <li>{{ $errors->first('email') }}</li>
                                @endif
                                @if ($errors->first('password'))
                                    <li>{{ $errors->first('password') }}</li>
                                @endif
                              @endif
                              </ul>
                            </div>
                          </font>
                          </td>
                        </tr>
                      </table>
                      <table align="center">
                          <tr>
                            <td>
                              <div class="col-lg-12">
                                <p style="color:red">Pilih Jenis Sekolah/Madrasah Anda !</p >
                                {!! Form::select('jenis_school', $jenis_school,1,['class' => 'form-control']) !!}
                               </div>
                            </td>
                          </tr>
                        </table>
                        <br />
					            <table align="center">
                        <tr>
                          <td>
                            <input class="form-control" size="40" placeholder="Masukkan Username Anda!" name="username" id="username">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                        <tr>
                          <td>
                            <input class="form-control" size="40" placeholder="Masukkan Nama Lengkap Anda!" name="full_name" id="full_name">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                          <tr>
                            <td>
                              <input class="form-control" size="40" placeholder="Masukkan Email Anda!" name="email" id="email">
                            </td>
                          </tr>
                        </table>
                        <br />
                      <table align="center">
                        <tr>
                          <td>
                            <input class="form-control" size="40" type="password" placeholder="Masukkan Password Anda!" name="password">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <table align="center">
                        <tr>
                          <td>
                            <input class="form-control" size="40"  type="password" placeholder="Masukkan Konfirmasi Password Anda!" name="password_confirmation">
                          </td>
                        </tr>
                      </table>
                      <br />
                      <button type="submit" class="btn btn-default btn-xl wow tada">
      									Buat Akun Sekarang
      								</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
  @endif
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
                        <p class="text-muted"><a href="http://its.ac.id">Institut Teknologi Sepuluh Nopember</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="logo/kampus/unair.png" alt="" />
                        <p class="text-muted"><a href="http://unair.ac.id">Universitas Airlangga</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/ugm.png" alt="" />
                        <p class="text-muted"><a href="http://www.ugm.ac.id/">Universitas Gadjah Mada</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/uinmalang.png" alt="" />
                        <p class="text-muted"><a href="http://uin-malang.ac.id">UIN Maulana Malik Ibrahim</a></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/jakarta.png" alt="" />
                        <p class="text-muted"><a href="http://uinjkt.ac.id">UIN Syarif Hidayatullah</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="logo/kampus/ipb.png" alt="" />
                        <p class="text-muted"><a href="http://ipb.ac.id">Institut Pertanian Bogor</a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/uinmakasar.png" alt="" />
                        <p class="text-muted"><a href="http://www.uin-alauddin.ac.id">UIN Alauddin Makassar </a></p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <img src="/logo/kampus/upi.png" alt="" />
                        <p class="text-muted"><a href="http://upi.edu">Universitas Pendidikan Indonesia</a></p>
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
                    <p><a href="mailto:mahasantripbsb@gmail.com"><font color="white">mahasantripbsb@gmail.com</font></a></p>
                </div>
            </div>

        </div>
        <br />
        <table align="center">
          <tr>
            <td>
              Copyright &copy; <?php echo date('Y'); ?> by devmora PBSB All right reserved
            </td>
          </tr>
        </table>


    </section>

    <!-- jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>


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

      <script>
      .....
      var $_token = $('#token').val();
      ....
      $.ajax({
                      type: 'post',
                      cache: false,
                      headers: { 'X-XSRF-TOKEN' : $_token },
                      url: 'the_url_to_controller_thru_route/' + some_parameters_if_needed,
                      //contentType: "application/json; charset=utf-8",
                      //dataType: 'json',
                      data: {personid: 873}, //assuming that you send some data like id of a person to controller
                                      success: function(data) {
      ....
      </script>
</body>

</html>
