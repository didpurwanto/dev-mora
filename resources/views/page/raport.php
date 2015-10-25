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
                    <font color="grey">Langkah 5</font>
                  </li>
                  <li>
                    <b> <font color="red"> Langkah 6</font></b>
                  </li>
                  <li>
                    <font color="grey">Summary</font>
                  </li>
              </ol>

              <div class="alert alert-success">
                <font color="black">
                  <h2>Data Raport</h2><br />
                  <h4>JURUSAN : <?php echo "MA - IPA"?></h4>
                <form role="form" action="<?php echo base_url("index.php/akun/registrasi_action")?>" method="post" name="myform" id="myform" enctype="multipart/form-data">

                  <div class="table-responsive">
                      <table class="table table-bordered table-hover table-striped ">
                          <thead align="center">
                              <tr class="info">
                                  <th rowspan="2"><?php echo "IPA"?></th>
                                  <th colspan="2" >Kelas 1</th>
                                  <th colspan="2" >Kelas 2</th>
                                  <th colspan="2" >Kelas 3</th>
                              </tr>
                              <tr class="info">

                                  <th>Sem 1</th>
                                  <th>Sem 2</th>
                                  <th>Sem 1</th>
                                  <th>Sem 2</th>
                                  <th>Sem 1</th>
                                  <th>Sem 2</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php
                                for($i=1 ; $i < 7 ; $i++)
                                {
                                  echo "<tr class=\"warning\">";
                                    echo "<td>";
                                    echo "Matematika";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";
                                  echo "</tr>";
                                }
                               ?>
                          </tbody>
                      </table>
                      <font color="red">* Tuliskan dalam skala 1-100
                      <br />
                      &nbsp&nbsp&nbspJika Anda tidak memiliki nilai untuk mata pelajaran yang tertera di atas, isikan 0</font>
                      <hr />
                      <table class="table table-bordered table-hover table-striped ">
                          <thead align="center">
                              <tr class="info">
                                  <th rowspan="2"><?php echo "IPA"?></th>
                                  <th colspan="2" >Kelas 1</th>
                                  <th colspan="2" >Kelas 2</th>
                                  <th colspan="2" >Kelas 3</th>
                              </tr>
                              <tr class="info">

                                  <th>Sem 1</th>
                                  <th>Sem 2</th>
                                  <th>Sem 1</th>
                                  <th>Sem 2</th>
                                  <th>Sem 1</th>
                                  <th>Sem 2</th>
                              </tr>
                          </thead>
                          <tbody>
                              <?php

                                  echo "<tr class=\"warning\">";
                                    echo "<td>";
                                    echo "Rangking";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";

                                    echo "<td align=\"center\">";
                                    echo "<input type\"text\" size=\"5\">";
                                    echo "</td>";
                                  echo "</tr>";

                               ?>
                          </tbody>
                      </table>
                  </div>
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
