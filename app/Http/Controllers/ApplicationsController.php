<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;
use App\Application;
use App\University;
use App\Departement;

class ApplicationsController extends Controller {


	public function edit($applicant_id)
	{
		$appl = Application::findOrFail($applicant_id);
		return view('application.edit', compact('appl'));
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
		return redirect('raports/', $form->applicant_id);
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
        $departs = University::where('university_id', '=', $university_id)->get();
        //dd($kabupatens);
		$options = array();

        foreach ($departs as $depart) {
            $options += array($depart->id => $depart->departemen_name);
        }
		
		//dd($options);
        return $options;
    }

}
