<div class="form-group">
	{!! Form::label('univ_name', 'Nama Universitas :') !!}
	{!! Form::select('univ_name',$univ_list, 1 , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('departement_name', 'Nama Departemen :') !!}
	{!! Form::text('departement_name',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-control']) !!}
</div>