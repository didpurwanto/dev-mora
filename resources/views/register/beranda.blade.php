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
                  <h2>Selamat Datang, {!! strtoupper(\Auth::user()->username); !!} </h2><br />

                  <p>
                    Website ini adalah sistem informasi pendaftaran program beasiswa PBSB. Silahkan Anda melengkapi form pendaftaran yang berisi biodata, data keluarga, data pesantren, data raport, dan pilihan studi Anda.
                    Pastikan data Anda benar dan bisa dipertanggung jawabkan.
                  </p>
                  <p>
                    Jika Anda mengalami kesulitan dalam mengisi data, silahkan hubungi kami di mahasantripbsb@gmail.com
                  </p>

                  <hr />

                  <div class="panel-body">
                    Petunjuk pengisian data:<br />

                    1. Siapkan Informasi Biodata Diri<br />
                    2. Siapkan Informasi Profil Keluarga<br />
                    3. Siapkan Informasi Profil Pesantren<br />
                    4. Siapkan Informasi Profil Sekolah<br />
                    5. Siapkan Informasi Profil Nilai raport kelas 1 sampai 6<br />
                    6. Rencanakan Universitas dan Jurusan yang akan dipilih<br />
                    7. jika semua data telah siap, maka klik tombol 'Mulai Mengisi' di bawah<br />
                    8. Kemudian lengkapi seluruh data sampai halaman terakhir dan cetak Formulir Pendaftaran <br />
                    <br />
                    <br />
                  </div>
                  <a href="{!! URL::to('/applicants') !!}" type="button" class="btn btn-success">Mulai Mengisi</a>
				        </font>
              </div>
          </div>
      </div>
      <!-- /.row -->


@stop
