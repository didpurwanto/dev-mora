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

class ApplicationsController extends Controller {

	private $program_study_id;

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function edit($applicant_id)
	{
		$dep1 = "";
		$dep2 = "";

		$program_study_id = School::where('applicant_id', $applicant_id)->pluck('program_study_id');
		//dd($program_study_id);
		//$program_study = ProgramStudy::
		$univ = University::lists('university_name','id');

		$dep = Departement::where('study_program_id', $program_study_id)->lists('departement_name','id');

		//$appl_univ = Application::with('university')->get();
		//$departemen = Departement::where('program_study_id', $program_study_id)->lists('departement_name','id');
		$appl = Application::findOrFail($applicant_id);

		/*--------------
		if (! $appl->major_1_id == 0)
		{
			$dep1 = Departement::where('id',$appl->major_1_id)->pluck('departement_name');
		}

		if (! $appl->major_2_id == 0)
		{
			$dep2 = Departement::where('id',$appl->major_2_id)->pluck('departement_name');
		}-----*/

		return view('application.edit', compact('appl','univ','dep'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function update($applicant_id, ApplicationRequest $request)
	{
		$appl = Application::findOrFail($applicant_id);
		//Save record to the database
		$form = $appl->update($request->all());
		//
		return redirect('summary/'. $appl->applicant_id);
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
