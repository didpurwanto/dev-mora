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
		$this->middleware('schoolcheck'); // make sure data in school has been filled. if doesn't, redirect thos those page.
		$this->middleware('finish');
	}

	public function edit()
	{
		$dep1 = "";
		$dep2 = "";

		// get program studi yang di ambil di sekolah
		$program_study_id = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		//dd($program_study_id);
		//$program_study = ProgramStudy::
		$univ = University::lists('university_name','id');

		// ambil departemen yang bisa diambil dari program studi yang diambil
		$dep = Departement::has('program_studies','=', $program_study_id)->lists('departement_name','id');
		//$dep = Departement::whereHas('program_studies', function($q)
		//{
		//    $q->where('program_study_id', '=', $program_study_id);
		//})->lists('departement_name','id');
		//dd($dep);

		//$appl_univ = Application::with('university')->get();
		//$departemen = Departement::where('program_study_id', $program_study_id)->lists('departement_name','id');
		$appl = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();

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
