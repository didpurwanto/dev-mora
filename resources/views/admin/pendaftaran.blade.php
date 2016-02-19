@extends('admin.index')

@section('css')
  {!! Html::style('datepicker/css/bootstrap-datetimepicker.min.css') !!}
@stop

@section('content')


<div class="row">
    <div class="col-lg-12">
    {!! Form::model($pendaftaran2,['method' => 'PATCH','url' => ['/admin/pendaftaran/'.$pendaftaran2->id]]) !!}
        <div class="col-lg-12">
          <p>BUKA atau TUTUP Pendaftaran Peserta Seleksi Program Beasiswa Berprestasi (PBSB) ?</p>
        </div>
        <div class="col-lg-3">
          {!! Form::select('tutup_pendaftaran', $pendaftaran, $pendaftaran2->tutup_pendaftaran, ['class' => 'form-control']) !!}
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="col-lg-12">
          <p><b>Atau</b> Pilih Tanggal Penutupan Pendaftaran PBSB :</p>
        </div>
        <div class="col-lg-3 form-group">
            <!-- JQUERY TANGGAL -->
                <div class="input-group date tanggal_tutup col-md-12" data-date="{{ $pendaftaran2->tanggal_tutup }}" data-date-format="yyyy-mm-dd" data-link-field="tanggal_tutup" data-link-format="yyyy-mm-dd">
                  <input class="form-control" size="16" type="text" value="{{ $pendaftaran2->tanggal_tutup }}" readonly >

                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <input type="hidden" id="tanggal_tutup" value="{{ $pendaftaran2->tanggal_tutup }}" name="tanggal_tutup"/>
              <!-- END JQUERY TANGGAL -->
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
        <div class="col-lg-12">
    			{!! Form::submit('Simpan', ['class' => 'btn btn-primary form-button']) !!}
    		</div>
      {!! Form::close() !!}
      </div>
    <!-- /.col-lg-12 -->
</div>
@stop


@section('script')
  <!-- DATE PICKER -->
  {!! Html::script('datepicker/sample_in_bootstrap_v3/jquery/jquery-1.8.3.min.js', array('type' => 'text/javascript', 'charset' => 'UTF-8')) !!}
  {!! Html::script('datepicker/sample_in_bootstrap_v3/bootstrap/js/bootstrap.min.js', array('type' => 'text/javascript')) !!}
  {!! Html::script('datepicker/js/bootstrap-datetimepicker.js', array('type' => 'text/javascript', 'charset' => 'UTF-8')) !!}
  {!! Html::script('datepicker/js/locales/bootstrap-datetimepicker.id.js', array('type' => 'text/javascript', 'charset' => 'UTF-8')) !!}

  <script type="text/javascript">
  $('.tanggal_tutup').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
    autoclose: 1,
    todayHighlight: 1,
    startView: 2,
    minView: 2,
    forceParse: 0
    });
  </script>
@stop
