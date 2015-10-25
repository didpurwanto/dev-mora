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
    <link href="<?php echo base_url('public/theme')?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('public/theme')?>/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('public/theme')?>/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('public/theme')?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

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
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Dev Mora Nasional</a>
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
                            <a href="<?php echo base_url()?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li >
                        <a href="<?php echo base_url('index.php/pages/dashboard')?>"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/biodata')?>"><i class="fa fa-fw fa-edit"></i> Biodata</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/keluarga')?>"><i class="fa fa-fw fa-edit"></i> Data Keluarga</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/pesantren')?>"><i class="fa fa-fw fa-edit"></i> Data Pesantren</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/sekolah')?>"><i class="fa fa-fw fa-edit"></i> Data Sekolah</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/studi')?>"><i class="fa fa-fw fa-edit"></i> Pilih Studi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/raport')?>"><i class="fa fa-fw fa-edit"></i> Data Raport</a>
                    </li>

                    <li>
                        <a href="<?php echo base_url('index.php/pages/summary')?>"><i class="fa fa-fw fa-desktop"></i> Summary</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('index.php/pages/cetak_kartu')?>"><i class="fa fa-fw fa-file"></i> Cetak Kartu</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <!--load  isi -->
        <div id="page-wrapper">
            <?php $this->load->view($isi); ?>  <!--LOAD PTG-->
        </div>
        <!-- end load isi -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('public/theme')?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('public/theme')?>/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('public/theme')?>/js/plugins/morris/raphael.min.js"></script>
    <script src="<?php echo base_url('public/theme')?>/js/plugins/morris/morris.min.js"></script>
    <script src="<?php echo base_url('public/theme')?>/js/plugins/morris/morris-data.js"></script>

</body>

</html>
