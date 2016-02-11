<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\University;
use App\Http\Requests\UniversityRequest;

class UniversitiesController extends Controller {

	public function __construct()
	{
		$this->middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$univ = University::all();

		foreach ($univ as $unv){
			if ($unv['status'] == 1)
			{
				$unv['status'] = 'Aktif';	
			}
			else {
				$unv['status'] = 'Tidak Aktif';
			}
		}
		$counter = 0;
		return view('university.univ', compact('univ', 'counter'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('university.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UniversityRequest $request)
	{
		//$input = Request::all();
		//return $input;
		//$this->validate($request, ['university_name' => 'required']);
		University::create($request->all());

		\Session::flash('flash_text','A New University has been created!');
		return redirect('admin/universities');
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
		$counter = 0;
		return view('university.show', compact('univ', 'counter'));
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
	public function update($id, UniversityRequest $request)
	{
		// dd($request);

		//Find or Fail to get ID
		$univ = University::findOrFail($id);

		//Save record to the database
		$univ->update($request->all());

		//Return to universities controller
		return redirect('admin/universities');
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

		return redirect('admin/universities');
	}

}
