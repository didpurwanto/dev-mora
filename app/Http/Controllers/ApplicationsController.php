<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ApplicationRequest;

class ApplicationsController extends Controller {


	public function create()
	{
		return view('application.create');
	}

	public function store(ApplicationRequest $request)
	{
		Application::create($request->all());
	}


	public function edit($id)
	{
		$appl = Application::findOrFail($id);
		return view('application.edit', compact('appl'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ApplicationRequest $request)
	{
		$fam = Application::findOrFail($id);
		//Save record to the database
		$univ->update($request->all());
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
