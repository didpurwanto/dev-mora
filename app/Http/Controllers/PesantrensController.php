<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\PesantrenRequest;
use App\Province;
use App\PesantrenType;

class PesantrensController extends Controller {

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$prov = Province::lists('province_name','id');
		$pes_type = PesantrenType::lists('type_name','id');
		
		return view('pesantren.create', compact('prov','pes_type'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PesantrenRequest $request)
	{
		//dd($request->all());
		Pesantren::create($request->all());
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
		$pes = Pesantren::findOrFail($id);
		return view('pesantren.edit', compact('pes','prov'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PesantrenRequest $request)
	{
		$pes = Pesantren::findOrFail($id);
		//Save record to the database
		$pes->update($request->all());
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
