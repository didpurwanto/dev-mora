@extends('register.index')

@section('content')

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  <table>
                    <tr>
                      <td rowspan="2" width="80px">
                        <img src="{!! URL::to('/') !!}/logo/Kemenag-Logo.png">
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
                  <h2>Selamat Datang, Didik Purwanto </h2><br />

                  <p>
                    Website ini adalah sistem informasi pendaftaran program beasiswa PBSB. Silahkan Anda melengkapi form pendaftaran yang berisi biodata, data keluarga, data pesantren, data raport, dan pilihan studi Anda.
                    Pastikan data Anda benar dan bisa dipertanggung jawabkan.
                  </p>
                  <p>
                    Jika Anda mengalami kesulitan dalam mengisi data, silahkan hubungi kami di devmora@gmail.com
                  </p>

                  <hr />

                  Petunjuk pengisian data:<br />
                  1. Siapkan segala data yang dibutuhkan<br />
                  2. Klik tombol 'Mulai Mengisi' di bawah<br />
                  3. Lengkapi data Anda sampai halaman terakhir <br />

                  <br />

                  <a href="#" type="button" class="btn btn-success">Mulai Mengisi</a>
				</font>
              </div>
          </div>
      </div>
      <!-- /.row -->


@stop