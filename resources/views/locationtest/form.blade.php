<div class="form-group">
	<div class="row">
		<div class="col-md-3">
				{!! Form::label('province_id', 'Provinsi') !!}
		</div>
		<div class="col-md-4">
				{!! Form::select('province_id', $prov, null,['class' => 'form-control']) !!}
		</div>
	</div>
</div>
<!--
<div class="form-group">
	<div class="row">
		<div class="col-md-3">
			{!! Form::label('location_name', 'Nama Lokasi') !!}
		</div>
		<div class="col-md-4">
			{!! Form::select('location_name',array('0' => 'Lokasi Tes'),null, ['class' => 'form-control']) !!}
		</div>
	</div>
</div>
-->
<br />
<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary btn-large form-button']) !!}
</div>
