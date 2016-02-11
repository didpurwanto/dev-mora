<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Departement;
use App\University;
use App\ProgramStudy;
use App\Http\Requests\DepartementRequest;

class DepartementsController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth');
		$this->middleware('admin');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dep = Departement::all();
		//$listProgram = ProgramStudy::lists('program_name');
		//dd($dep['university_name'] = University::getUniversityName($dep->university_id));
		
		foreach ($dep as $dept){
			// echo $dept;	
			if ($dept['status'] == 1)
			{
				$dept['status'] = 'Aktif';	
			}
			else {
				$dept['status'] = 'Tidak Aktif';
			}
		}
		// dd($dep);
		$counter = 0;    		

		return view('departement.dep', compact('dep', 'counter'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$dep = new Departement();

		$univ_list= University::lists('university_name','id');
		$listProgram = ProgramStudy::lists('program_name','id');

		return view('departement.create', compact('dep','univ_list','listProgram'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DepartementRequest $request)
	{
		//dd($request->input('program_name'));
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

		// dd($request);

		$depart['university_id'] = $request->input('university_id');
		$depart['departement_name'] = $request->input('departement_name');
		$depart['departement_code'] = $request->input('departement_code');
		$depart['status'] = $request->input('status');
		//dd($depart);

		$data = Departement::create($depart);
	  //dd($data);

		$data2 = $data->program_studies()->attach($request->input('study_list'));
		//dd($data2);
		//$departemen = $this->validate($request, ['departement_name' => 'required']);

		//dd($departemen = $request->input('departement_name'));

		//$departemen = new Departement(['departement_name' => $request['departement_name']]);

		//dd($departemen);

		//$departemen = $univ->departement()->save($data);

		//$data = new Departement($request->all());
		//$form = Departement()->university()->save($data);

		//\Session::flash('flash_text','A New Departement has been created!');
		return redirect('admin/departements');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//dd($id);
		$dep = Departement::findOrFail($id);

		$listProgram = ProgramStudy::lists('program_name','id');
		//$listProgram = $dep->getProgramListAttribute();
		$univ_list= University::lists('university_name','id');
		$univ = University::where('id','=',$dep['university_id'])->first()->id;
		//$univ = $univ->id;
		//dd($univ);
		return view('departement.edit', compact('dep','univ_list','univ','listProgram'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, DepartementRequest $request)
	{

		//Find or Fail to get ID
		$dep = Departement::findOrFail($id);
		// Validate with the parameters
		//$this->validate($request, ['departement_name' => 'required']);
		//Save record to the database
		$dep->university_id = $request->input('university_id');
		$dep->departement_name = $request->input('departement_name');
		$dep['departement_code'] = $request->input('departement_code');
		$dep['status'] = $request->input('status');
		$dep->save();

		// $dep->update($request->all());

		$data2 = $dep->program_studies()->sync($request->input('study_list'));
		// dd($data2);
		//Return to universities controller
		return redirect('admin/departements');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Departement::destroy($id);

		return redirect('admin/departements');
	}

}
