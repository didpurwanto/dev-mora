<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Province;
use App\Http\Requests\ProvinceRequest;

use Illuminate\Http\Request;

class ProvincesController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$prov = Province::all();
		return view('province.prov', compact('prov'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('province.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProvinceRequest $request)
	{
		Province::create($request->all());

		\Session::flash('flash_text','A New University has been created!');
		return redirect('provinces');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$prov = Province::findOrFail($id);
		return view('province.edit', compact('prov'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, ProvinceRequest $request)
	{
		//Find or Fail to get ID
		$prov = Province::findOrFail($id);

		//Save record to the database
		$prov->update($request->all());

		//Return to universities controller
		return redirect('provinces');
	 }
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Province::destroy($id);
	}

}
