<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PesantrenRequest;
use App\Province;
use App\PesantrenType;

class PesantrensController extends Controller {

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function edit($applicant_id)
	{
		$prov = Province::lists('province_name','id');
		$pes = Pesantren::findOrFail($applicant_id);
		
		return view('pesantren.edit', compact('pes','prov'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function update($applicant_id, PesantrenRequest $request)
	{
		$pes = Pesantren::findOrFail($applicant_id);
		//Save record to the database
		$form = $pes->update($request->all());
		//
		return redirect('schools/', $form->applicant_id);
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
