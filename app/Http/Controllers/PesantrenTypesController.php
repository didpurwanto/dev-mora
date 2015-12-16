<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\PesantrenType;
use Illuminate\Http\Request;
use App\Http\Requests\PesantrenTypeRequest;

class PesantrenTypesController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth');
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$pesantrentype = PesantrenType::all();

		return view('pesantrentype.index', compact('pesantrentype'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pesantrentype.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PesantrenTypeRequest $request)
	{
		PesantrenType::create($request->all());

		return redirect('admin/pesantrentypes');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$pesantrentype = PesantrenType::findOrFail($id);
		return view('pesantrentype.edit', compact('pesantrentype'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, PesantrenTypeRequest $request)
	{
		$edu = PesantrenType::findOrfail($id);
		// dd($edu);
		$edu->update($request->all());

		return redirect('admin/pesantrentypes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		PesantrenType::destroy($id);

		return redirect('admin/pesantrentypes');
	}

}
