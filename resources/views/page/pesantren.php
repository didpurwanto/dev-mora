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

              <ol class="breadcrumb">
                  <li>
                    <font color="grey">Langkah 1</font>
                  </li>
                  <li>
                    <font color="grey">Langkah 2</font>
                  </li>
                  <li>
                    <b> <font color="red"> Langkah 3</font></b>
                  </li>
                  <li>
                    <font color="grey">Langkah 4</font>
                  </li>
                  <li>
                    <font color="grey">Langkah 5</font>
                  </li>
                  <li>
                    <font color="grey">Langkah 6</font>
                  </li>
                  <li>
                    <font color="grey">Summary</font>
                  </li>
              </ol>

              <div class="alert alert-success">
                <font color="black">
                  <h2>Data Pesantren</h2><br />

                <form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
                    <table>
                      <tr>
                        <td width="200px">
                          Nama Asal Ponpes
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_pesantren_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="PP Al Hidayah" name="pesantren" id="pesantren">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Nama Pimpinan Ponpes
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_kiai_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="Rachman Rahardian" name="kiai" id="kiai">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          NSPP
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_nspp_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="1243223" name="nspp" id="nspp">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Jenis
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_jenis_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="jenis" id="jenis">
                              <option selected></option>
                              <option value="muadalah">Muadalah</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Telepon
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_telepon_errorloc' class="error_strings"></div></font>
                            <input class="form-control" placeholder="1243223" name="telepon" id="telepon">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Alamat
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_alamat_errorloc' class="error_strings"></div></font>
                              <textarea rows="3" class="form-control" name="alamat" placeholder="Dsn Playaran Ds Kendal RT 02 RW 05 Kendal Ngawi Jawa Timur" id="alamat"></textarea>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Provinsi
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_provinsi_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="provinsi" id="provinsi">
                              <option selected></option>
                              <option value="jakarta">Propinsi</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Kabupaten
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_kabupaten_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="kabupaten" id="kabupaten">
                              <option selected></option>
                              <option value="jakarta">Kabupaten</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Kecamatan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_kecamatan_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="kecamatan" id="kecamatan">
                              <option selected></option>
                              <option value="jakarta">Kecamatan</option>
                            </select>
                          </div>
                        </td>
                      </tr>



                    </table>

                    <br />

                    <a href="<?php echo base_url('index.php/pages/keluarga')?>" type="submit" class="btn btn-success" value="Kembali">Kembali</a>
                    <input type="submit" class="btn btn-success" value="Lanjutkan"></button>
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

			frmvalidator.addValidation("pesantren","req","Nama ponpes harus diisi!");
      frmvalidator.addValidation("kiai","req","Nama pimpinan ponpes harus diisi!");
      frmvalidator.addValidation("kiai","alpha","Nama pimpinan ponpes harus berupa huruf!");
      frmvalidator.addValidation("nspp","req","NSPP harus diisi!");
      frmvalidator.addValidation("nspp","numeric","NSPP harus berupa angka!");
      frmvalidator.addValidation("jenis","req","Jenis pesantren harus diisi!");
      frmvalidator.addValidation("telepon","req","Telepon pesantren harus diisi!");
      frmvalidator.addValidation("telepon","numeric","Telepon pesantren harus berupa angka!");

      frmvalidator.addValidation("alamat","req","Alamat orang tua harus diisi!");
      frmvalidator.addValidation("provinsi","req","Provinsi orang tua harus diisi!");
      frmvalidator.addValidation("kabupaten","req","Kabupaten orang tua harus diisi!");
      frmvalidator.addValidation("kecamatan","req","Kecamatan orang tua harus diisi!");


		//]]>
	</script>
</html>
