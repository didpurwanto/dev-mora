<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Departement;
use App\University;
use App\Http\Requests\DepartementRequest;

class DepartementsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$dep = Departement::all();
		//dd($dep['university_name'] = University::getUniversityName($dep->university_id));
		
		return view('departement.dep', compact('dep'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$univ_list= University::lists('university_name');
		return view('departement.create', compact('univ_list'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(DepartementRequest $request)
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
		
		$univ = University::findOrFail($request->input('univ_name'));
		
		$departemen = $this->validate($request, ['departement_name' => 'required']);
		
		//dd($departemen = $request->input('departement_name'));
		
		$departemen = new Departement(['departement_name' => $request['departement_name']]);
		
		//dd($departemen);
				
		$departemen = $univ->departement()->save($departemen);
		
		\Session::flash('flash_text','A New Departement has been created!');
		return redirect('departements');
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
		$dep = Departement::findOrFail($id);
		$dep['university_name'] = University::where('id',$dep['university_id'])->select('university_name')->first()->university_name;
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
		$dep = Departement::findOrFail($id);
		$univ_list= University::lists('university_name');
		$univ = University::where('id',$dep['university_id'])->first()->id;
		//$univ = $univ->id;
		//dd($univ);
		return view('departement.edit', compact('dep','univ_list','univ'));
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
		$dep->update($request->all());
		//Return to universities controller
		return redirect('departements');	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Departement::destroy($id);
	}

}
