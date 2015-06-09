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
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function edit($applicant_id)
	{
		$prov = Province::lists('province_name','id');
		$sch_type = SchoolType::lists('type_name','id');
		$prog_stud = ProgramStudy::lists('program_name','id');
		
		$sch = School::findOrFail($applicant_id);
		return view('school.edit', compact('sch','prov','prog_stud','sch_type'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function update($applicant_id, SchoolRequest $request)
	{
		$sch = School::findOrFail($applicant_id);
		//Save record to the database
		$form = $sch->update($request->all());
		//
		return redirect('applications/', $form->applicant_id);
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
