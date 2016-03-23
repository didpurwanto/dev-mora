<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use App\Application;
use App\University;
use App\Departement;
use App\School;
use App\ProgramStudy;
use App\Province;
use App\TestLocation;
use Auth;

class ApplicationsController extends Controller {

	private $program_study_id;

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('schoolcheck'); // make sure data in school has been filled. if doesn't, redirect tho those page.
		$this->middleware('finish');
	}

	public function edit()
	{
		// get program studi from school
		$program_study_id = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		//dd($program_study_id);

		// get all universities
		#logic here.
		#scenario: only show uin makasar if applicant and pesanten from east indonesia

		#check, is applicant born and pesantren from east indo?
		#id above 24 mean east indo province
		$fromEastIndo = DB::table('applicants')
							->leftJoin('pesantrens', 'pesantrens.user_id','=','applicants.user_id')
							->where('applicants.province_id','>', 24)
							->where('pesantrens.province_id','>', 24)
							->select('applicants.province_id', 'pesantrens.province_id')
							->get();
		// dd($fromEastIndo);
		#hidden university with university_code = 17
		if( empty( $fromEastIndo ) )
		{
			$univ = University::where('status', 1)
				->where('university_code', '!=', 17)
				->lists('university_name','id');
		}
		else
		{
			$univ = University::where('status', 1)->lists('university_name','id');
		}
		#todo: later only show universities which have departement

		//univ id
		$already_select_university= Application::where('user_id',Auth::user()->id)->pluck('university_id');
		// dd($already_select_university);
		// useful for refresh after error on validation
		if($already_select_university == "0"){
			$dep = array();
		}
		else
		{
			$dep = DB::table('departements')
				//->select('departement_name','id')
				->leftJoin('departements_program_studies', 'departements_program_studies.departement_id','=', 'departements.id')
				->where('university_id', '=', $already_select_university)
				->where('program_study_id', '=', $program_study_id)
				->where('status', '=', 1)
				->lists('departement_name','id');
		}

		$appl = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		// dd($dep);
		return view('application.edit', compact('appl','univ','dep'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function update(ApplicationRequest $request)
	{
		// dd($request);
		$appl = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//Save record to the database
		$form = $appl->update($request->all());

		//update if the table is filled with content it should.
		$appl->finish = 1;
		//sava the update
		$appl->save();
		//
		return redirect('summary');
	}

	// public function getDepartements($university_id)
 //  {
 //    $departs = Departement::where('university_id', $university_id)->where('status', '1')->get();
	// 	//dd($departs);

 //    $options = array();

 //    foreach ($departs as $depart){
 //        $options += array($depart->id => $depart->departement_name);
 //    }

		//dd($options);
  //   return $options;
  // }

	//public function listDepart($program_study_id)
	//{
	//		return Departement::lists('departement_name','id');
	//}

	//public function jurusan()
	//{
		//$univ = array();
		//$dep = array();
		//$deps = Departement::where('status', '1')->get();
		//$univs = University::where('status', 1)->lists('university_name','id');
		//dd($deps);

		//return view('detiljurusan', compact('deps'));
	//}

	public function getDepartements($university_id)
    {
    	#get id jurusan and the where id_jurusan in departement jurusan
		$program_study_id = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		$departs = DB::table('departements')
			->select('departement_id', 'departement_name')
			->leftJoin('departements_program_studies', 'departements_program_studies.departement_id','=', 'departements.id')
			->where('university_id', '=', $university_id)
			->where('program_study_id', '=', $program_study_id)
			->where('status', '=', 1)
			->get();
			//dd($departs);

	    $options = array();
      foreach ($departs as $depart) {
          $options += array($depart->departement_id => $depart->departement_name);
      }

		 //dd($options);
    	return $options;
    }


}
