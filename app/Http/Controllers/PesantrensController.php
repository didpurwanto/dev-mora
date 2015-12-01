<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PesantrenRequest;
use App\Province;
use App\Kabupaten;
use App\Kecamatan;
use App\PesantrenType;
use App\Pesantren;
use Auth;

class PesantrensController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('finish');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function edit()
	{
		//$fam = Family::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$pes = Pesantren::where('user_id', '=', Auth::user()->id)->firstOrFail();

		$prov = Province::lists('province_name','id');
		$kab = Kabupaten::where('id',$pes->kabupaten_id)->lists('kabupaten_name','id');
		$kec = Kecamatan::where('id',$pes->kecamatan_id)->lists('kecamatan_name','id');

		$pes_type = PesantrenType::lists('type_name','id');

		return view('pesantren.edit', compact('pes','prov','pes_type','kab','kec'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $applicant_id
	 * @return Response
	 */
	public function update(PesantrenRequest $request)
	{
		$pes = Pesantren::where('user_id', '=', Auth::user()->id)->firstOrFail();

		//Save record to the database
		$form = $pes->update($request->all());

		//update if the table is filled with content it should.
		$pes->finish = 1;
		//sava the update
		$pes->save();
		//
		return redirect('schools');
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
