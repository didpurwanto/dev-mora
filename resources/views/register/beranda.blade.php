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
                        Sistem Pendaftaran
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
                  <h2>Selamat Datang, {!! ucfirst(\Auth::user()->username); !!} </h2><br />

                  <div class="panel-body">
                  <p>
                    Website ini adalah sistem informasi pendaftaran program beasiswa PBSB. <br>
                    Silahkan isi seluruh isian yang diminta dan pastikan seluruh informasi <br>
                    tersebut adalah benar dan dapat dipertanggung jawabkan.
                  </p>
                   Berikut daftar dokumen dan petunjuk untuk melakukan pendaftaran:<br />
                    1. Informasi Biodata Diri<br />
                    2. Informasi Profil Keluarga<br />
                    3. Informasi Profil Pesantren<br />
                    4. Informasi Profil Sekolah<br />
                    5. Informasi Profil Nilai raport kelas X sampai XII<br />
                    6. Rencanakan Universitas dan Jurusan yang akan dipilih<br />
                    7. jika semua informasi telah siap, maka klik tombol <b>'Mulai Mengisi'</b> di bawah ini<br />
                    8. Kemudian lengkapi seluruh data sampai halaman terakhir dan cetak Formulir Pendaftaran <br />
                    <br />
                    <hr />
                    <p>
                      Jika Anda mengalami kesulitan, silahkan hubungi mahasantripbsb@gmail.com
                    </p>

                    <br />
                  </div>
                  <a href="{!! URL::to('/applicants') !!}" type="button" class="btn btn-success">Mulai Mengisi</a>
				        </font>
              </div>
          </div>
      </div>
      <!-- /.row -->


@stop
