<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\EducationLevel;
use App\Http\Requests\EducationLevelRequest;

class EducationLevelController extends Controller {

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
		$edu = EducationLevel::all();

		return view('educationlevel.index', compact('edu'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('educationlevel.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(EducationLevelRequest $request)
	{
		EducationLevel::create($request->all());

		return redirect('admin/educationlevels');
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$edu = EducationLevel::findOrfail($id);
		return view('educationlevel.edit', compact('edu'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, EducationLevelRequest $request)
	{
		$edu = EducationLevel::findOrfail($id);
		// dd($edu);
		$edu->update($request->all());

		return redirect('admin/educationlevels');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		EducationLevel::destroy($id);

		return redirect('admin/educationlevels');
	}

}
