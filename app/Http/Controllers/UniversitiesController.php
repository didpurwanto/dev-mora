<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\University;

class UniversitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$univ = University::all();
		return view('university.univ', compact('univ'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('university.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//$input = Request::all();
		//return $input;
		$this->validate($request, ['university_name' => 'required']);
		University::create($request->all());
		
		\Session::flash('flash_text','A New University has been created!');
		return redirect('universities');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//Find or Fail to get ID
		$univ = University::findOrFail($id);
		//Sent data to view
		return view('university.show', compact('univ'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$univ = University::findOrFail($id);
		return view('university.edit', compact('univ'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @param  Request  $request
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		//Find or Fail to get ID
		$univ = University::findOrFail($id);
		// Validate with the parameters
		$this->validate($request, ['university_name' => 'required']);
		//Save record to the database
		$univ->update($request->all());
		//Return to universities controller
		return redirect('universities');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		University::destroy($id);
	}

}
