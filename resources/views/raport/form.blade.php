<div class="table table-responsive">
	<table class="table table-bordered table-stripped set-bg">
		<thead>
			<tr>
				<th>Mata Pelajaran</th>
				<th>Semester 1</th>
				<th>Semester 2</th>
				<th>Semester 3</th>
				<th>Semester 4</th>
				<th>Semester 5</th>
				<th>Semester 6</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><b>{{ $listSubjects[0] }}</b></td>
				<td>{!! Form::text('p1s1', $subject_1[0],['size' => 4]) !!}</td>
				<td>{!! Form::text('p1s2', $subject_1[1],['size' => 4]) !!}</td>
				<td>{!! Form::text('p1s3', $subject_1[2],['size' => 4]) !!}</td>
				<td>{!! Form::text('p1s4', $subject_1[3],['size' => 4]) !!}</td>
				<td>{!! Form::text('p1s5', $subject_1[4],['size' => 4]) !!}</td>
				<td>{!! Form::text('p1s6', $subject_1[5],['size' => 4]) !!}</td>
			</tr>
			<tr>
				<td><b>{{ $listSubjects[1] }}</b></td>
				<td>{!! Form::text('p2s1', $subject_2[0],['size' => 4]) !!}</td>
				<td>{!! Form::text('p2s2', $subject_2[1],['size' => 4]) !!}</td>
				<td>{!! Form::text('p2s3', $subject_2[2],['size' => 4]) !!}</td>
				<td>{!! Form::text('p2s4', $subject_2[3],['size' => 4]) !!}</td>
				<td>{!! Form::text('p2s5', $subject_2[4],['size' => 4]) !!}</td>
				<td>{!! Form::text('p2s6', $subject_2[5],['size' => 4]) !!}</td>
			</tr>
			<tr>
				<td><b>{{ $listSubjects[2] }}</b></td>
				<td>{!! Form::text('p3s1', $subject_3[0],['size' => 4]) !!}</td>
				<td>{!! Form::text('p3s2', $subject_3[1],['size' => 4]) !!}</td>
				<td>{!! Form::text('p3s3', $subject_3[2],['size' => 4]) !!}</td>
				<td>{!! Form::text('p3s4', $subject_3[3],['size' => 4]) !!}</td>
				<td>{!! Form::text('p3s5', $subject_3[4],['size' => 4]) !!}</td>
				<td>{!! Form::text('p3s6', $subject_3[5],['size' => 4]) !!}</td>
			</tr>
			<tr>
				<td><b>{{ $listSubjects[3] }}</b></td>
				<td>{!! Form::text('p4s1', $subject_4[0],['size' => 4]) !!}</td>
				<td>{!! Form::text('p4s2', $subject_4[1],['size' => 4]) !!}</td>
				<td>{!! Form::text('p4s3', $subject_4[2],['size' => 4]) !!}</td>
				<td>{!! Form::text('p4s4', $subject_4[3],['size' => 4]) !!}</td>
				<td>{!! Form::text('p4s5', $subject_4[4],['size' => 4]) !!}</td>
				<td>{!! Form::text('p4s6', $subject_4[5],['size' => 4]) !!}</td>
			</tr>
			<tr>
				<td><b>{{ $listSubjects[4] }}</b></td>
				<td>{!! Form::text('p5s1', $subject_5[0],['size' => 4]) !!}</td>
				<td>{!! Form::text('p5s2', $subject_5[1],['size' => 4]) !!}</td>
				<td>{!! Form::text('p5s3', $subject_5[2],['size' => 4]) !!}</td>
				<td>{!! Form::text('p5s4', $subject_5[3],['size' => 4]) !!}</td>
				<td>{!! Form::text('p5s5', $subject_5[4],['size' => 4]) !!}</td>
				<td>{!! Form::text('p5s6', $subject_5[5],['size' => 4]) !!}</td>
			</tr>
			<tr>
				<td><b>{{ $listSubjects[5] }}</b></td>
				<td>{!! Form::text('r1', $ranking[0],['size' => 4]) !!}</td>
				<td>{!! Form::text('r2', $ranking[1],['size' => 4]) !!}</td>
				<td>{!! Form::text('r3', $ranking[2],['size' => 4]) !!}</td>
				<td>{!! Form::text('r4', $ranking[3],['size' => 4]) !!}</td>
				<td>{!! Form::text('r5', $ranking[4],['size' => 4]) !!}</td>
				<td>{!! Form::text('r6', $ranking[5],['size' => 4]) !!}</td>
			</tr>
		</tbody>
	</table>

<!-- 	<p><small>
	`	<font color="red">
		*ps: 
		Semua nilai rapor harus diatas 60 dengan maksimal 100. 
		Rangking harus diisi dengan angka antara 1 sampai 10.<br>
		</font>
		</small>
	</p> -->

	<div class="form-group">
		{!! Form::submit($text, ['class' => 'btn btn-primary btn-large form-button']) !!}
	</div>
</div>