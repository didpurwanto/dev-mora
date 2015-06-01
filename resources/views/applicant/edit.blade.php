@extends('layout')


@section('css')
	{!! Html::style('css/bootstrap-datepicker.min.css') !!}
@stop

@section('content')
	<h2>Biodata Pribadi</h2>
	<hr />
	
	{!! Form::model($app,['method' => 'PATCH','url' => ['/applicants',$app->id], 'files' => true]) !!}
		@include ('applicant.form', ['text' => 'Next'])
	{!! Form::close() !!}
	
	@include('errors.list')
@stop

@section('script')
	{!! Html::script('js/bootstrap-datepicker.min.js', array('type' => 'text/javascript')) !!}
	<script>
	  $(function() {
		$( '#datepicker' ).datepicker();
	  });
    </script>
@stop