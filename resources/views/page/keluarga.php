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
                    <b> <font color="red"> Langkah 2</font></b>
                  </li>
                  <li>
                    <font color="grey">Langkah 3</font>
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
                  <h2>Data Keluarga</h2><br />

                <form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
                    <table>

                      <tr>
                        <td width="200px">
                          Nama Ayah Kandung
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_nama_ayah_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="Rachman Rahardian" name="nama_ayah" id="nama_ayah">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Usia
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_usia_ayah_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="usia_ayah" id="usia_ayah">
                              <option selected></option>
                              <?php
                                for($i=13 ; $i< 30 ; $i++)
                                  echo "<option value=\"$i\">$i Tahun</option>"
                               ?>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Status Hidup / Almarhum
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_status_hidup_ayah_errorloc' class="error_strings"></div></font>
                            <label class="radio-inline">
                                <input type="radio" name="status_hidup_ayah" id="status_hidup_ayah" value="hidup" >Hidup
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status_hidup_ayah" id="status_hidup_ayah" value="alm">Almarhum
                            </label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Pendidikan Terakhir
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_pendidikan_ayah_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah">
                              <option selected></option>
                              <option value="none">Tidak Sekolah</option>
                              <option value="sd">SD Sederajat</option>
                              <option value="smp">SMP Sederajat</option>
                              <option value="sma">SMA Sederajat</option>
                              <option value="s1">S1</option>
                              <option value="s2">S2</option>
                              <option value="s3">S3</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Pekerjaan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_pekerjaan_ayah_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="pekerjaan_ayah" id="pekerjaan_ayah">
                              <option selected></option>
                              <option value="none">Tidak Bekerja</option>
                              <option value="pensiunan">Pensiunan</option>
                              <option value="wirausaha">Wirausaha</option>
                              <option value="petani">Petani</option>
                              <option value="karyawan">Karyawan</option>
                              <option value="pns">PNS</option>
                              <option value="pejabat">Pejabat</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Penghasilan per Bulan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_penghasilan_ayah_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="penghasilan_ayah" id="penghasilan_ayah">
                              <option selected></option>
                              <option value="1">0 - 500 ribu</option>
                              <option value="2">500 ribu - 1 juta</option>
                              <option value="3">1 juta - 2 juta</option>
                              <option value="4">2 juta - 3 juta</option>
                              <option value="5">3 juta - 4 juta</option>
                              <option value="6">4 juta - 5 juta</option>
                              <option value="7">Diatas 5 juta</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                    </table>
                    <hr />

                    <table>

                      <tr>
                        <td width="200px">
                          Nama Ibu Kandung
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_nama_ibu_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="Rosa Amalia" name="nama_ibu" id="nama_ibu">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Usia
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_usia_ibu_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="usia_ibu" id="usia_ibu">
                              <option selected></option>
                              <?php
                                for($i=13 ; $i< 30 ; $i++)
                                  echo "<option value=\"$i\">$i Tahun</option>"
                               ?>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Status Hidup / Almarhum
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_status_hidup_ibu_errorloc' class="error_strings"></div></font>
                            <label class="radio-inline">
                                <input type="radio" name="status_hidup_ibu" id="status_hidup_ibu" value="hidup" >Hidup
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status_hidup_ibu" id="status_hidup_ibu" value="alm">Almarhum
                            </label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Pendidikan Terakhir
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_pendidikan_ibu_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                              <option selected></option>
                              <option value="none">Tidak Sekolah</option>
                              <option value="sd">SD Sederajat</option>
                              <option value="smp">SMP Sederajat</option>
                              <option value="sma">SMA Sederajat</option>
                              <option value="s1">S1</option>
                              <option value="s2">S2</option>
                              <option value="s3">S3</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Pekerjaan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_pekerjaan_ibu_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="pekerjaan_ibu" id="pekerjaan_ibu">
                              <option selected></option>
                              <option value="none">Tidak Bekerja</option>
                              <option value="pensiunan">Pensiunan</option>
                              <option value="wirausaha">Wirausaha</option>
                              <option value="petani">Petani</option>
                              <option value="karyawan">Karyawan</option>
                              <option value="pns">PNS</option>
                              <option value="pejabat">Pejabat</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                            Penghasilan per Bulan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_penghasilan_ibu_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="penghasilan_ibu" id="penghasilan_ibu">
                              <option selected></option>
                              <option value="1">0 - 500 ribu</option>
                              <option value="2">500 ribu - 1 juta</option>
                              <option value="3">1 juta - 2 juta</option>
                              <option value="4">2 juta - 3 juta</option>
                              <option value="5">3 juta - 4 juta</option>
                              <option value="6">4 juta - 5 juta</option>
                              <option value="7">Diatas 5 juta</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                    </table>

                    <hr />
                    <table>
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

                    <a href="<?php echo base_url('index.php/pages/biodata')?>" type="submit" class="btn btn-success" value="Kembali">Kembali</a>
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

			frmvalidator.addValidation("nama_ayah","req","Nama ayah harus diisi!");
      frmvalidator.addValidation("nama_ayah","numeric","Nama ayah harus berupa huruf!");
      frmvalidator.addValidation("usia_ayah","req","Usia ayah harus diisi!");
      frmvalidator.addValidation("pendidikan_ayah","req","Pendidikan terakhir ayah harus diisi!");
      frmvalidator.addValidation("pekerjaan_ayah","req","Pekerjaan ayah harus diisi!");
      frmvalidator.addValidation("penghasilan_ayah","req","Penghasilan ayah harus diisi!");

      frmvalidator.addValidation("nama_ibu","req","Nama ibu harus diisi!");
      frmvalidator.addValidation("nama_ibu","numeric","Nama ibu harus berupa huruf!");
      frmvalidator.addValidation("usia_ibu","req","Usia ibu harus diisi!");
      frmvalidator.addValidation("pendidikan_ibu","req","Pendidikan terakhir ibu harus diisi!");
      frmvalidator.addValidation("pekerjaan_ibu","req","Pekerjaan ibu harus diisi!");
      frmvalidator.addValidation("penghasilan_ibu","req","Penghasilan ibu harus diisi!");

      frmvalidator.addValidation("alamat","req","Alamat orang tua harus diisi!");
      frmvalidator.addValidation("provinsi","req","Provinsi orang tua harus diisi!");
      frmvalidator.addValidation("kabupaten","req","Kabupaten orang tua harus diisi!");
      frmvalidator.addValidation("kecamatan","req","Kecamatan orang tua harus diisi!");



		//]]>
	</script>
</html>
