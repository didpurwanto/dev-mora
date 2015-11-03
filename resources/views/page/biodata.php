<!-- VALIDATION SCRIPT-->
<script language="JavaScript" src="<?php echo base_url("public/validation")?>/gen_validatorv4.js"
  type="text/javascript" xml:space="preserve">
</script>

<!--DATE  PICKER -->
<script language="JavaScript" src="<?php echo base_url("public/datepicker/")?>/js/bootstrap-datetimepicker.min.js" type="text/javascript" ></script>
<link href="<?php echo base_url("public/datepicker/")?>/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<script type="text/javascript">
  $(function() {
	$('#datetimepicker4').datetimepicker({
	  pickTime: false
	});
  });
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
                      <b> <font color="red"> Langkah 1</font></b>
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
                  <h2>Biodata</h2><br />

                <form role="form" action="" method="post" name="myform" id="myform" enctype="multipart/form-data">
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
                          Nama Lengkap
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_nama_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="Didik Purwanto" name="nama" id="nama">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          No KTP
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_ktp_errorloc' class="error_strings"></div></font>
                              <input class="form-control" placeholder="12345678 8765 334" name="ktp" id="ktp">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Kelamin
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_kelamin_errorloc' class="error_strings"></div></font>
                            <label class="radio-inline">
                                <input type="radio" name="kelamin" id="kelamin" value="lelaki" >Lelaki
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="kelamin" id="kelamin" value="perempuan">Perempuan
                            </label>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Tempat Lahir
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                              <font color = "red" size="2px"><div id='myform_tempat_errorloc' class="error_strings"></div></font>
                              <input class="form-control" name="tempat" placeholder="Ngawi" id="tempat">
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Tanggal Lahir
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_tanggal_errorloc' class="error_strings"></div></font>
  													<div class="input-group date form_date col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="tanggal" data-link-format="yyyy-mm-dd">
  														<input class="form-control" size="16" type="text" value="" readonly >

  														<span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
  													</div>
  													<input type="hidden" id="tanggal" value="" name="tanggal"/>
  												</div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Jumlah Hafalan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_hafalan_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="hafalan" id="hafalan">
                              <option selected></option>
                              <?php
                                for($i=0 ; $i< 30 ; $i++)
                                  echo "<option value=\"$i\">$i Juz</option>"
                               ?>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Buta Warna
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_buta_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="buta" id="buta">
                              <option selected></option>
                              <option value="0">Tidak</option>
                              <option value="2">Buta Warna Sebagian</option>
                              <option value="3">Buta Warna Total</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Riwayat Gangguan Mental
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="radio">
                            <label class="radio-inline">
                                <input type="radio" name="mental" id="mental" value="1">Ya
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="mental" id="mental" value="0">Tidak
                            </label>
                          <div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Penyakit yang Sedang/Pernah Diderita
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="300px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_penyakit_errorloc' class="error_strings"></div></font>
                            <textarea name="penyakit" class="form-control" rows="3" placeholder="TBC, DBD, Tifus, dll"></textarea>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Golongan Darah
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_goldar_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="goldar">
                              <option selected></option>
                              <option value="A">A</option>
                              <option value="AB">AB</option>
                              <option value="B">B</option>
                              <option value="O">O</option>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Berat Badan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_berat_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="berat">
                              <option selected></option>
                              <?php
                                for($i=30 ; $i< 100 ; $i++)
                                  echo "<option value=\"$i\">$i Kilogram</option>"
                               ?>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Tinggi Badan
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_tinggi_errorloc' class="error_strings"></div></font>
                            <select class="form-control" name="tinggi">
                              <option selected></option>
                              <?php
                                for($i=100 ; $i< 200 ; $i++)
                                  echo "<option value=\"$i\">$i Centimeter</option>"
                               ?>
                            </select>
                          </div>
                        </td>
                      </tr>

                      <tr>
                        <td width="200px">
                          Telepon yang Bisa Dihubungi
                        </td>
                        <td width="20px">
                          :
                        </td>
                        <td width="250px">
                          <div class="form-group">
                            <font color = "red" size="2px"><div id='myform_telepon_errorloc' class="error_strings"></div></font>
                              <input name="telepon" class="form-control" placeholder="081615116327">
                          </div>
                        </td>
                      </tr>
                    </table>

                    <div class="form-group">
    									<label>Upload Foto <font color="brown" size="1px"><br />Maksimal ukuran 5 MB dengan rasio 1024 x 768 pixel</font></label>
    									<font color = "red" size="2px"><div id='myform_foto_errorloc' class="error_strings"></div></font>
    									<input type="file" name='foto' id='foto'>
    								</div>
                    <br />

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


<!-- DATE PICKER -->

<script type="text/javascript" src="<?php echo base_url('public/datepicker/sample in bootstrap v3')?>/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/sample in bootstrap v3')?>/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/')?>/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url('public/datepicker/')?>/js/locales/bootstrap-datetimepicker.id.js" charset="UTF-8"></script>
<script type="text/javascript">
  $('.form_datetime').datetimepicker({
      //language:  'fr',
      weekStart: 1,
      todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  forceParse: 0,
      showMeridian: 1
  });
$('.form_date').datetimepicker({
      language:  'fr',
      weekStart: 1,
      todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
  });
$('.form_time').datetimepicker({
      language:  'fr',
      weekStart: 1,
      todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 1,
  minView: 0,
  maxView: 1,
  forceParse: 0
  });
</script>


<!-- VALIDATION SCRIPT-->
	<script language="JavaScript" type="text/javascript"
			xml:space="preserve">//<![CDATA[
		//You should create the validator only after the definition of the HTML form
	  	    var frmvalidator  = new Validator("myform");
			frmvalidator.EnableOnPageErrorDisplay();
			frmvalidator.EnableMsgsTogether();

			frmvalidator.addValidation("nama","req","Nama harus diisi!");
      frmvalidator.addValidation("nama","alpha","Nama harus berupa huruf!");
      frmvalidator.addValidation("ktp","numeric","KTP harus berupa angka!");


      frmvalidator.addValidation("tempat","req","Tempat lahir harus diisi!");
      frmvalidator.addValidation("tanggal","req","Tanggal harus diisi!");
      frmvalidator.addValidation("hafalan","req","Jumlah hafalan harus diisi!");
      frmvalidator.addValidation("buta","req","Buta warna harus diisi!");
      frmvalidator.addValidation("penyakit","req","Riwayat penyakit warna harus diisi!");
      frmvalidator.addValidation("goldar","req","Golongan darah harus diisi!");
      frmvalidator.addValidation("berat","req","Berat badan harus diisi!");
      frmvalidator.addValidation("tinggi","req","Tinggi badan harus diisi!");
      frmvalidator.addValidation("telepon","req","Telepon harus diisi!");
      frmvalidator.addValidation("telepon","numeric","Telepon harus berupa angka!");


			 frmvalidator.addValidation("foto","file_extn=jpg;png","Foto harus berupa JPG atau PNG!");
			 frmvalidator.addValidation("foto","req_file"," Foto harus diupload!");


		//]]>
	</script>
</html>
