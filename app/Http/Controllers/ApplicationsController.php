<?php namespace App\Http\Controllers;

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
		$dep1 = "";
		$dep2 = "";

		// get program studi from school
		$program_study_id = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		// get all universities
		$univ = University::lists('university_name','id');

		// get departement based on program study
		$dep = Departement::has('program_studies','=', $program_study_id)->lists('departement_name','id');
		//dd($dep);
		$appl = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();

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
        $departs = Departement::where('university_id', $university_id)->get();
        //dd($kabupatens);
		    $options = array();

        foreach ($departs as $depart) {
            $options += array($depart->id => $depart->departement_name);
        }

		//dd($options);
        return $options;
    }

}
