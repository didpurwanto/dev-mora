<div class="form-group">
	{!! Form::label('university_id', 'Nama Universitas :') !!}
	{!! Form::select('university_id', $univ_list, null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('departement_name', 'Nama Departemen :') !!}
	{!! Form::text('departement_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>