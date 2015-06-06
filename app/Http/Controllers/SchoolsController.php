<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\SchoolRequest;
use App\School;
use App\Province;
use App\SchoolType;
use App\ProgramStudy;

class SchoolsController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$prov = Province::lists('province_name','id');
		$sch_type = SchoolType::lists('type_name','id');
		$prog_stud = ProgramStudy::lists('program_name','id');
		
		return view('school.create', compact('prov','sch_type','prog_stud'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SchoolRequest $request)
	{
		//dd($request->all());
		School::create($request->all());
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prov = Province::lists('province_name','id');
		$sch_type = SchoolType::lists('type_name','id');
		$prog_stud = ProgramStudy::lists('program_name','id');
		
		$sch = School::findOrFail($id);
		return view('school.edit', compact('sch','prov','prog_stud','sch_type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, SchoolRequest $request)
	{
		$sch = School::findOrFail($id);
		//Save record to the database
		$sch->update($request->all());
		//
		return redirect('applications');
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
