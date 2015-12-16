<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SchoolType;
use Illuminate\Http\Request;
use App\Http\Requests\SchoolTypeRequest;

class SchoolTypesController extends Controller {

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
		$schooltype = SchoolType::all();
		return view('schooltype.index', compact('schooltype'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('schooltype.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(SchoolTypeRequest $Request)
	{
		SchoolType::create($Request->all());
		return redirect('admin/schooltypes');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$schooltype =  SchoolType::findOrFail($id);
		return view('schooltype.edit', compact('schooltype'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, SchoolTypeRequest $request)
	{
		$schooltype = SchoolType::findOrFail($id);

		$schooltype->update($request->all());

		return redirect('admin/schooltypes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		SchoolType::destroy($id);
		return redirect('admin/schooltypes');
	}

}
