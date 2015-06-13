<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\RaportRequest;
use App\Raport;
use App\ProgramStudy;


class RaportsController extends Controller {
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($applicant_id)
	{
		$getListSubjects = 
		$raports = Raport::findOrFail($applicant_id);
		
		return view('raport.edit', compact('raports'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, RaportRequest $request)
	{
		dd($request->all());
		$raport = Raport::findOrFail($id);
		//Save record to the database
		$raport->update($request->all());
		//Return to universities controller
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
