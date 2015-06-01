<div class="form-group">
	{!! Form::label('full_name', 'Nama Lengkap :') !!}
	{!! Form::text('full_name',null ,['class' => 'form-control', 'placeholder' => 'Henri Sekeladi']) !!}
</div>
<div class="form-group">
	{!! Form::label('gender', 'Jenis Kelamin :') !!}
	{!! Form::radio('gender', 'L',['class' => 'form-control']) !!} Laki-Laki 
	{!! Form::radio('gender', 'P',['class' => 'form-control']) !!} Perempuan
</div> 
<div class="form-group">
	{!! Form::label('place_birth', 'Tempat Lahir :') !!}
	{!! Form::text('place_birth',null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label('date_birth', 'Tanggal Lahir :') !!}
	{!! Form::text('date_birth', null, array('id' => 'datepicker', 'class' => 'form-control', 'data-date-format' => 'yyyy-mm-dd', 'data-date-viewmode' => 'years')) !!}
</div>
<div class="form-group">
	{!! Form::label('recitation', 'Jumlah Hafalan Al-Quran :') !!}
	{!! Form::text('recitation', null, ['class' => 'form-control']) !!} Juz
</div>
<div class="form-group">
	{!! Form::label('color_blind', 'Buta Warna :') !!}
	{!! Form::select('color_blind', array('1' => 'Ya', '0' => 'Tidak'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('mental_disorder', 'Riwayat Gangguan Mental :') !!}
	{!! Form::select('mental_disorder', array('1' => 'Ya', '0' => 'Tidak'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('illness', 'Penyakit yang sedang/pernah diderita :') !!}
	{!! Form::textarea('illness', null,['class' => 'form-control', 'placeholder' => 'Pisahkan dengan koma']) !!}
</div>
<div class="form-group">
	{!! Form::label('blood_type', 'Golongan Darah :') !!}
	{!! Form::select('blood_type', array('A' => 'A', 'B' => 'B','AB' => 'AB','O' => 'O'),['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('weight', 'Berat Badan :') !!}
	{!! Form::text('weight', null ,['class' => 'form-control']) !!} KG
</div>
<div class="form-group">
	{!! Form::label('height', 'Tinggi Badan :') !!}
	{!! Form::text('height', null ,['class' => 'form-control']) !!} CM
</div>
<div class="form-group">
	{!! Form::label('contact', 'Telepon yang bisa dihubungi :') !!}
	{!! Form::text('contact', null ,['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Pas Photo') !!}
    {!! Form::file('profile_photo', null, ['id' => 'picture']) !!}
</div>

<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
	{!! Form::reset('Cancel', ['class' => 'btn btn-primary form-button']) !!}
</div>