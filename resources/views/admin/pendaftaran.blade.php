@extends('admin.index')

@section('css')
  {!! Html::style('datepicker/css/bootstrap-datetimepicker.min.css') !!}
@stop
@section('content')

<div class="row">
  <div class="col-lg-5">
    <p>Pilih Tanggal Penutupan Pendaftaran PBSB :</p>
  </div>
</div>
<div class="row">
    <div class="col-lg-3">
    {!! Form::model($pendaftaran2,['method' => 'PATCH','url' => ['/admin/pendaftaran/'.$pendaftaran2->id]]) !!}
      <div class="form-group">
            <!-- JQUERY TANGGAL -->
                <div class="input-group date tanggal_tutup col-md-12" data-date="" data-date-format="yyyy-mm-dd" data-link-field="tanggal" data-link-format="yyyy-mm-dd">
                  <input class="form-control" size="16" type="text" value="{{ $pendaftaran2->tanggal_tutup }}" readonly >

                  <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                </div>
                <input type="hidden" id="tanggal" value="" name="tanggal"/>
              <!-- END JQUERY TANGGAL -->
        </div>
        <div class="form-group">
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
