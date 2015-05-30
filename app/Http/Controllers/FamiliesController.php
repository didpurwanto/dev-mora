<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FamilyRequest;

class FamiliesController extends Controller {

	public function create()
	{
		return view('family.create');
	}

	
	public function store(FamilyRequest $request)
	{
		Family::create($request->all());
	}


	public function edit($id)
	{
		$fam = Family::findOrFail($id);
		return view('family.edit', compact('fam'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, FamilyRequest $request)
	{
		$fam = Family::findOrFail($id);
		//Save record to the database
		$univ->update($request->all());
		//Return to universities controller
		return redirect('families');
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
