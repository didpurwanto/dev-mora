<div class="form-group">
	{!! Form::label('university_id', 'Nama Universitas :') !!}
	{!! Form::select('university_id',$univ_list, 0, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('departement_name', 'Nama Departemen/Jurusan :') !!}
	{!! Form::text('departement_name',null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('program_studies', 'Jurusan MA yang boleh mengambil :') !!}
	{!! Form::select('program_studies[]', $listProgram,null, ['class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>
