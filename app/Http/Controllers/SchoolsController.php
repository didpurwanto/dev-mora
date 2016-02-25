<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;
use App\School;
use App\Province;
use App\Kabupaten;
use App\Kecamatan;
use App\SchoolType;
use App\ProgramStudy;
use Auth;
use App\Pesantren;
use App\PesantrenType;

// use Carbon\Carbon;

class SchoolsController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('finish');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function edit()
	{
		$prov = Province::lists('province_name','id');
		$sch_type = SchoolType::lists('type_name','id');
		$pesantren_type = PesantrenType::lists('type_name','id');
		$prog_stud = ProgramStudy::lists('program_name','id');

		$sch = School::where('user_id', '=', Auth::user()->id)->firstOrFail();

		$school_type = School::where('user_id', '=', Auth::user()->id)->pluck('school_type_id');
		$tahunlulus = SchoolType::where('id','=',$school_type)->pluck('max_graduate');

		$tahun_ini = date('Y');
		$tahun = array();
		for ($i=$tahunlulus; $i <= $tahun_ini; $i++) {
			$tahun +=  [$i => $i];
		}
		// dd($sch);

		//$kab = Kabupaten::where('id',$sch->kabupaten_id)->lists('kabupaten_name','id');
		//$kec = Kecamatan::where('id',$sch->kecamatan_id)->lists('kecamatan_name','id');
		// $mytime = Carbon\Carbon::now();
		// echo $mytime->toDateTimeString();
		// dd($mytime);
		return view('school.edit', compact('sch','prov','prog_stud','pesantren_type', 'tahun','school_type','sch_type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function update(SchoolRequest $request)
	{
		$sch = School::where('user_id', '=', Auth::user()->id)->firstOrFail();;
		//Save record to the database
		$form = $sch->update($request->all());

		//update if the table is filled with content it should.
		$sch->finish = 1;
		//sava the update
		$sch->save();
		//
		return redirect('raports/');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
