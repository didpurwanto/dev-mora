<div class="form-group">
	{!! Form::label('pesantren_name', 'Nama Pesantren :') !!}
	{!! Form::text('pesantren_name',null ,['class' => 'form-control', 'placeholder' => 'Hubbul Wathan']) !!}
</div>
<div class="form-group">
	{!! Form::label('kiai_name', 'Nama Pimpinan :') !!}
	{!! Form::text('kiai_name',null ,['class' => 'form-control', 'placeholder' => 'Agung Laksono']) !!}
</div>
<div class="form-group">
	{!! Form::label('nipp', 'NSPP :') !!}
	{!! Form::text('nipp', null,['class' => 'form-control', 'placeholder' => 'Nomor Statistik Pondok Pesantren']) !!}
</div> 
<div class="form-group">
	{!! Form::label('pesantren_type', 'Jenis Pesantren :') !!}
	{!! Form::select('pesantren_type', $pes_type,['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('pesantren_address', 'Alamat Pesantren :') !!}
	{!! Form::textarea('pesantren_address', null,['class' => 'form-control', 'placeholder' => 'Jl. Keramat Jati, No. 5, RT/RW 05/05, Kel. Sukajadi', 'cols' => '50', 'rows' => '2']) !!}
</div>
<div class="form-group">
	{!! Form::label('province_id', 'Provinsi :') !!}
	{!! Form::select('province_id', $prov, 'Provinsi',['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kabupaten_id', 'Kabupaten :') !!}
	{!! Form::select('kabupaten_id', ['1' => 'Kabupaten'], 'Kabupaten',['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('kecamatan_id', 'Kecamatan :') !!}
	{!! Form::select('kecamatan_id', ['1' => 'Kecamatan'], 'Kecamatan',['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
	{!! Form::reset('Batal', ['class' => 'btn btn-primary form-button']) !!}
</div>