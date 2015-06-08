<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
  type="text/javascript" xml:space="preserve">
</script>



<div id="page-wrapper">

  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  <table>
                    <tr>
                      <td rowspan="2" width="80px">
                        <img src="<?php echo base_url('public/logo/Kemenag-Logo.png')?>">
                      </td>
                      <td>
                        DEVMORA NASIONAL
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <small>Program Beasiswa Santri Berprestasi</small>
                      </td>
                    </tr>
                  </table>

              </h1>

          </div>
      </div>
      <!-- /.row -->

      <div class="row">
          <div class="col-lg-12">

              

              <div class="alert alert-success">
                <font color="black">
                  <h2>Cetak Kartu</h2><br />

                <form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">


                    <br />
                    <a href="#">
                      <img src="<?php echo base_url('public/logo/print1.png')?>"  />
                    </a>
                    &nbsp&nbsp
                    <a href="#">
                      <img src="<?php echo base_url('public/logo/print2.png')?>"  />
                    </a>
                  </form>



              </div>
          </div>
      </div>
      <!-- /.row -->




  </div>
  <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->



<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("sekolah","req","Nama sekolah harus diisi!");
      frmvalidator.addValidation("kepala_sekolah","req","Nama sekolah harus diisi!");
      frmvalidator.addValidation("kepala_sekolah","alpha","Nama sekolah harus berupa huruf!");
      frmvalidator.addValidation("nisn","req","NISN sekolah harus diisi!");
      frmvalidator.addValidation("nisn","numeric","NISN sekolah harus berupa angka!");
      frmvalidator.addValidation("status_sekolah","req","Status sekolah harus diisi!");
      frmvalidator.addValidation("tahun_lulus","req","Tahun lulus harus diisi!");
      frmvalidator.addValidation("jenis_sekolah","req","Jenis sekolah harus diisi!");
      frmvalidator.addValidation("program_studi","req","Program studi harus diisi!");
      frmvalidator.addValidation("lokasi","req","Lokasi sekolah harus diisi!");


      frmvalidator.addValidation("alamat","req","Alamat orang tua harus diisi!");
      frmvalidator.addValidation("provinsi","req","Provinsi orang tua harus diisi!");
      frmvalidator.addValidation("kabupaten","req","Kabupaten orang tua harus diisi!");
      frmvalidator.addValidation("kecamatan","req","Kecamatan orang tua harus diisi!");


		//]]>
	</script>
</html>
