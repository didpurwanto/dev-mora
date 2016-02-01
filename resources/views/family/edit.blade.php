@extends('register.index')

@section('content')
	<h2>Biodata Keluarga</h2>
	<hr />

	{!! Form::model($fam,['method' => 'PATCH','url' => ['/families']]) !!}
		@include ('family.form', ['text' => 'Selanjutnya'])
	{!! Form::close() !!}

@stop

@section('script')
	<script type="text/javascript">
	/**
	 * File: js/showhide.js
	 * Author: design1online.com, LLC
	 * Purpose: toggle the visibility of fields depending on the value of another field
	 **/
	$(document).ready(function () {
	    toggleFields(); //call this first so we start out with the correct visibility depending on the selected form values
	    //this will call our toggleFields function every time the selection value of our underAge field changes
	    $("#father_deceased").change(function () {
	        toggleFields();
	    });

	});

	//this toggles the visibility of our parent permission fields depending on the current selected value of the underAge field
	function toggleFields() {
	    if ($("#father_deceased").val() == 0)
	        $("#fatherDetails").show();
	    else
	        $("#fatherDetails").hide();
	}

	$(document).ready(function () {
	    toggleFields2(); //call this first so we start out with the correct visibility depending on the selected form values
	    //this will call our toggleFields function every time the selection value of our underAge field changes
	    $("#mother_deceased").change(function () {
	        toggleFields2();
	    });

	});

	//this toggles the visibility of our parent permission fields depending on the current selected value of the underAge field
	function toggleFields2() {
	    if ($("#mother_deceased").val() == 0)
	        $("#motherDetails").show();
	    else
	        $("#motherDetails").hide();
	}
	</script>
@stop
