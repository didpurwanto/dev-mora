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
		ProgramStudy::create($request->all());
		return redirect('admin/programstudies');

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
		// dd($dep);
		return view('programstudi.edit', compact('dep'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProgramStudyRequest $request)
	{
		$dep = ProgramStudy::findOrFail($id);
		$dep->update($request->all());
		return redirect('admin/programstudies');	
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		ProgramStudy::destroy($id);
		
		return redirect('admin/programstudies');

	}

}
