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
                    <font color="grey">Langkah 4</font>
                  </li>
                  <li>
                    <b> <font color="red"> Langkah 5</font></b>
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
                <h2>Pilihan Studi</h2><br />

                <form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">

                    <table>
                      <tr>
                        <td width="200px" height="40px">
                          No Pendaftaran
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td>
                          <b>
                            <?php
                              echo "5111100702";
                            ?>
                          </b>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Bidang Studi Pilihan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_studi_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="studi" id="studi">
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
                            Perguruan Tinggi
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_kampus_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="kampus" id="kampus">
                              <option selected></option>
                              <option value="its">Institut Teknologi Sepuluh Nopember</option>
                              <option value="ugm">Universitas Gajah Mada</option>
                              <option value="unair">Universitas Airlangga</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                    </table>
                    <br />
                    <table>
                      <tr>
                        <td width="200px">
                            Program Studi Pilihan 1
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_jurusan1_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="jurusan1" id="jurusan1">
                              <option selected></option>
                              <option value="si">Sistem Informasi</option>
                              <option value="if">Teknik Informatika</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Program Studi Pilihan 2
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_jurusan2_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="jurusan2" id="jurusan2">
                              <option selected></option>
                              <option value="si">Sistem Informasi</option>
                              <option value="if">Teknik Informatika</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Bersedia Dipindah Jurusan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_pindah_errorloc' class="error_strings"></div></font>
                            <label class="radio-inline">
                                <input type="radio" name="pindah" id="pindah" value="1" >Ya
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="pindah" id="pindah" value="0">Tidak
                            </label>
                          </div>
                        </td>
                      </tr>

                    </table>

                    <br />

                    <a href="<?php echo base_url('index.php/pages/sekolah')?>" type="submit" class="btn btn-success" value="Kembali">Kembali</a>
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

			frmvalidator.addValidation("studi","req","Pilihan Studi harus diisi!");
      frmvalidator.addValidation("kampus","req","Perguruan Tinggi harus diisi!");
      frmvalidator.addValidation("jurusan1","req","Program studi 1 harus diisi!");
      frmvalidator.addValidation("jurusan2","req","Program studi 2 harus diisi!");




		//]]>
	</script>
</html>
