<div class="form-group">
	{!! Form::label('university_id', 'Nama Universitas :') !!}
	{!! Form::select('university_id', $univ_list, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('departement_code', 'Kode Jurusan :') !!}
	{!! Form::text('departement_code',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('departement_name', 'Nama Jurusan :') !!}
	{!! Form::text('departement_name',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('study_list', 'Jurusan MA yang boleh mengambil :') !!}
	{!! Form::select('study_list[]', $listProgram, null, ['class' => 'form-control', 'multiple']) !!}
</div>

   <div class="form-group">
    {!! Form::label('status','Status:') !!}
    {!! Form::radio('status', true, null, ['class' => 'class="btn btn-default']),'&nbsp', 'Aktif' !!}
    {!! Form::radio('status', false, null, ['class' => 'class="btn btn-default']),'&nbsp','non Aktif' !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
