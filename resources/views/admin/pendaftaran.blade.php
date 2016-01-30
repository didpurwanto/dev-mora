@extends('admin.index')

@section('css')
  {!! Html::style('css/bootstrap-switch.min.css') !!}
@stop
@section('content')

<div class="row">
    <div class="col-lg-12">
      {!! Form::model($pendaftaran2,['method' => 'PATCH','url' => ['/admin/pendaftaran/'.$pendaftaran2->id]]) !!}
        <div class="alert alert-success">
          <p>BUKA atau TUTUP Pendaftaran Peserta Seleksi Program Beasiswa Berprestasi (PBSB) ?</p>
        </div>
        <div class="col-md-2">
          {!! Form::select('tutup_pendaftaran', $pendaftaran, $pendaftaran2->tutup_pendaftaran, ['class' => 'form-control']) !!}
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
  {!! Html::script('js/bootstrap-switch.min.js', array('type' => 'text/javascript')) !!}
@stop
