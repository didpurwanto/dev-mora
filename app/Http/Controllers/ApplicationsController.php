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
		$univ = University::where('status', 1)->lists('university_name','id');
		// $univ =DB::table('universities')
		// 	->where('status','=',1)
		// 	->get();

		$dep = $this->listDepart($program_study_id);
		// dd($dep);

		// get departement based on program study
		//$dep = Departement::has('program_studies','=', $program_study_id)->lists('departement_name','id');
		//dd($dep);
		$appl = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		// dd($appl);
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

	public function getDepartements($university_id)
  {
    $departs = Departement::where('university_id', $university_id)->where('status', '1')->get();
		//dd($departs);

    $options = array();

    foreach ($departs as $depart){
        $options += array($depart->id => $depart->departement_name);
    }

		//dd($options);
    return $options;
  }

	public function listDepart($program_study_id)
	{
			return Departement::lists('departement_name','id');
	}

	public function jurusan()
	{
		$univ = array();
		$dep = array();
		$deps = Departement::where('status', '1')->get();
		//$univs = University::where('status', 1)->lists('university_name','id');
		//dd($deps);

		return view('detiljurusan', compact('deps'));
	}

    {
    	#get id jurusan and the where id_jurusan in departement jurusan
		$program_study_id = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		// select departement_name
		// from departements as a
		// left join departements_program_studies as b
		// on b.departement_id= a.id
		// where a.university_id=1 and b.program_study_id = 1
		$departs = DB::table('departements')
			->select('departement_name')
			->leftJoin('departements_program_studies', 'departements_program_studies.departement_id','=', 'departements.id')
			->where('university_id', '=', $university_id)
			->where('program_study_id', '=', $program_study_id)
			->where('status', '=', 1)
			->get();

		// dd($dep);
        // $departs = Departement::where('university_id', $university_id)->where('status', '1')->get();
		// dd($departs);

	    $options = array();
	    $counter = 0;
        foreach ($departs as $depart) {
            $options += array($counter => $depart->departement_name);
            $counter = $counter + 1;
        }

		// dd($options);
        return $options;
    }

}
