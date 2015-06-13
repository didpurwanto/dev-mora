<div class="table-responsive">
	<table class="table table-bordered">
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
				<td>Fisika</td>
				<td>{!! Form::text('p1s1') !!}</td>
				<td>{!! Form::text('p1s2') !!}</td>
				<td>{!! Form::text('p1s3') !!}</td>
				<td>{!! Form::text('p1s4') !!}</td>
				<td>{!! Form::text('p1s5') !!}</td>
				<td>{!! Form::text('p1s6') !!}</td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>{!! Form::text('p2s1') !!}</td>
				<td>{!! Form::text('p2s2') !!}</td>
				<td>{!! Form::text('p2s3') !!}</td>
				<td>{!! Form::text('p2s4') !!}</td>
				<td>{!! Form::text('p2s5') !!}</td>
				<td>{!! Form::text('p2s6') !!}</td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>{!! Form::text('p3s1') !!}</td>
				<td>{!! Form::text('p3s2') !!}</td>
				<td>{!! Form::text('p3s3') !!}</td>
				<td>{!! Form::text('p3s4') !!}</td>
				<td>{!! Form::text('p3s5') !!}</td>
				<td>{!! Form::text('p3s6') !!}</td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>{!! Form::text('p4s1') !!}</td>
				<td>{!! Form::text('p4s2') !!}</td>
				<td>{!! Form::text('p4s3') !!}</td>
				<td>{!! Form::text('p4s4') !!}</td>
				<td>{!! Form::text('p4s5') !!}</td>
				<td>{!! Form::text('p4s6') !!}</td>
			</tr>
			<tr>
				<td>Fisika</td>
				<td>{!! Form::text('p5s1') !!}</td>
				<td>{!! Form::text('p5s2') !!}</td>
				<td>{!! Form::text('p5s3') !!}</td>
				<td>{!! Form::text('p5s4') !!}</td>
				<td>{!! Form::text('p5s5') !!}</td>
				<td>{!! Form::text('p5s6') !!}</td>
			</tr>
			<tr>
				<td>Rangking</td>
				<td>{!! Form::text('r1') !!}</td>
				<td>{!! Form::text('r2') !!}</td>
				<td>{!! Form::text('r3') !!}</td>
				<td>{!! Form::text('r4') !!}</td>
				<td>{!! Form::text('r5') !!}</td>
				<td>{!! Form::text('r6') !!}</td>
			</tr>
		</tbody>
	</table>
</div>
<div class="form-group">
	{!! Form::submit($text, ['class' => 'btn btn-primary form-button']) !!}
</div>