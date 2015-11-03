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
                    <font color="grey">Langkah 3</font>
                  </li>
                  <li>
                    <b> <font color="red"> Langkah 4</font></b>
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
                  <h2>Data Sekolah</h2><br />

                <form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
                    <table>
                      <tr>
                        <td width="200px">
                          Nama Asal Sekolah
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_sekolah_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="MA Al Hidayah" name="sekolah" id="sekolah">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Nama Kepala Sekolah
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_kepala_sekolah_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="Andika Purwanto" name="kepala_sekolah" id="kepala_sekolah">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          NISN
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_nisn_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="1212637" name="nisn" id="nisn">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Status Sekolah
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_status_sekolah_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="status_sekolah" id="status_sekolah">
                              <option selected></option>
                              <option value="swasta">Swasta</option>
                              <option value="negeri">Negeri</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Tahun Lulus
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_tahun_lulus_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="tahun_lulus" id="tahun_lulus">
                              <option selected></option>
                              <?php
                                for($i=2010 ; $i < 2030 ; $i++)
                                  echo "<option value=\"$i\">$i</option>";
                               ?>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Jenis Sekolah
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_jenis_sekolah_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="jenis_sekolah" id="jenis_sekolah">
                              <option selected></option>
                              <option value="ma">MA</option>
                              <option value="salafi">Salafi</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Program Studi
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_program_studi_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="program_studi" id="program_studi">
                              <option selected></option>
                              <option value="agama">Agama</option>
                              <option value="ipa">IPA</option>
                              <option value="ips">IPS</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Lokasi Sekolah
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_lokasi_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="lokasi" id="lokasi">
                              <option selected></option>
                              <option value="dalam">Didalam Pesantren</option>
                              <option value="luar">Diluar Pesantren</option>
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

                    <a href="<?php echo base_url('index.php/pages/pesantren')?>" type="submit" class="btn btn-success" value="Kembali">Kembali</a>
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
      frmvalidator.addValidation("telepon","req","Telepon pesantren harus diisi!");
      frmvalidator.addValidation("telepon","numeric","Telepon pesantren harus berupa angka!");


      frmvalidator.addValidation("alamat","req","Alamat orang tua harus diisi!");
      frmvalidator.addValidation("provinsi","req","Provinsi orang tua harus diisi!");
      frmvalidator.addValidation("kabupaten","req","Kabupaten orang tua harus diisi!");
      frmvalidator.addValidation("kecamatan","req","Kecamatan orang tua harus diisi!");


		//]]>
	</script>
</html>
