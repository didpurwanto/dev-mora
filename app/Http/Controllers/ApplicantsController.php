<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\Http\Requests\ApplicantRequest;

class ApplicantsController extends Controller {

	public function create()
	{
		return view('applicant.create');
	}


	public function store(ApplicantRequest $request)
	{
		//dd($request->all());
		Applicant::create($request->all());
	}


	public function edit($id)
	{
		$app = Applicant::findOrFail($id);
		return view('applicant.edit', compact('app'));
	}

	public function update($id, ApplicantRequest $request)
	{
		$app = Applicant::findOrFail($id);
		//Save record to the database
		$app->update($request->all());
		//Return to universities controller
		return redirect('applicants');
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
