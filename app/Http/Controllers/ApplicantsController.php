<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\Province;
use App\Http\Requests\ApplicantRequest;
use App\Family;

class ApplicantsController extends Controller {

	/**
	 * Create view for create data.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function create()
	{
		$prov = Province::lists('province_name','id');
		return view('applicant.create', compact('prov'));
	}

	/**
	 * Insert data into database.
	 *
	 * @param  ApplicantRequest  $request
	 * @return Response
	 */
	public function store(ApplicantRequest $request)
	{
		//dd($request->all());
		//Applicant::create($request->except('profile_photo'));
		
		$imageName = $request->full_name . '.' . $request->file('photo')->getClientOriginalExtension();
		//dd($imageName);
		$request->file('photo')->move(base_path() . '/public/images/photos/', $imageName);
		
		$request['profile_photo'] = $imageName;
		//dd($request['profile_photo']);
		
		//dd($request->all());
		$form = Applicant::create($request->except('photo'));
		
		//$data = $form->id;
		
		//dd($data);
		
		//Family::create(array('applicant_id' => $data));
		\DB::table('families')->insert(array('applicant_id' => $form->id));
		\DB::table('pesantrens')->insert(array('applicant_id' => $form->id));
		\DB::table('schools')->insert(array('applicant_id' => $form->id));
		\DB::table('raports')->insert(array('applicant_id' => $form->id));
		\DB::table('applications')->insert(array('applicant_id' => $form->id));
		
		
		return redirect('families/create');
	}

	/**
	 * Edit data from Applicant.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$app = Applicant::findOrFail($id);
		
		$prov = Province::lists('province_name','id');
		
		return view('applicant.edit', compact('app','prov'));
	}

	/**
	 * Update data from Applicant.
	 *
	 * @param  int  $id, ApplicantRequest $request
	 * @return Redirect
	 */
	public function update($id, ApplicantRequest $request)
	{
		$app = Applicant::findOrFail($id);
		//Save record to the database
		$app->update($request->all());
		
		//Return
		return redirect('families/create');
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
