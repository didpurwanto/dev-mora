<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\ProgramStudy;
use App\Http\Requests\ProgramStudyRequest;

class ProgramStudiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$programs = ProgramStudy::all();
		//dd($dep['university_name'] = University::getUniversityName($dep->university_id));

		return view('programstudi.program', compact('programs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//$univ_list= University::lists('university_name','id');
		return view('programstudi.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProgramStudyRequest $request)
	{
		//dd($request->all());
		//dd($request->input('univ_name'));
		//$univ = $request->input('univ_name');
		//$dept = $this->validate($request, ['departement_name' => 'required']);
		//$dept->save($request->all());

		//$dept->university()->save($univ);
		//University->departements()->save($univ);
		//$this->save();

		//$departemen = new Departement(['departement_name' => 'Teknologi Informasi']);

		//$univ = new University;
		//dd($univ);

		$data = new ProgramStudy($request->all());

    //dd($data);
		$data->save();
		//$departemen = $this->validate($request, ['departement_name' => 'required']);

		//dd($departemen = $request->input('departement_name'));

		//$departemen = new Departement(['departement_name' => $request['departement_name']]);

		//dd($departemen);

		//$departemen = $univ->departement()->save($data);

		//$data = new Departement($request->all());
		//$form = Departement()->university()->save($data);

		//\Session::flash('flash_text','A New Departement has been created!');
		//return redirect('departements');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Find or Fail to get ID
		$dep = ProgramStudy::findOrFail($id);
		//$dep['university_name'] = University::where('id',$dep['university_id'])->select('university_name')->first()->university_name;
		//$dep['university_name'] = $univ->university_name;

		//Sent data to view
		return view('departement.show', compact('dep'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$dep = ProgramStudy::findOrFail($id);
		//$univ_list= University::lists('university_name');
		//$univ = University::where('id',$dep['university_id'])->first()->id;
		//$univ = $univ->id;
		//dd($univ);
		return view('programstudies.edit', compact('dep'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProgramStudyRequest $request)
	{
		//Find or Fail to get ID
		$dep = ProgramStudy::findOrFail($id);
		// Validate with the parameters
		//$this->validate($request, ['departement_name' => 'required']);
		//Save record to the database
		$dep->update($request->all());
		//Return to universities controller
		return redirect('programstudies');	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProgramStudy::destroy($id);
	}

}
