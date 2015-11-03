<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\JobType;
use Illuminate\Http\Request;
use App\Http\Requests\JobTypeRequest;


class JobTypesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$jobtype = JobType::all();

		return view('jobtype.index', compact('jobtype'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('jobtype.create');

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(JobTypeRequest $request)
	{
		JobType::create($request->all());

		return redirect('admin/jobtypes');

	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$jobtype = JobType::findOrfail($id);
		return view('jobtype.edit', compact('jobtype'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, JobTypeRequest $request)
	{
		$jobtype = JobType::findOrfail($id);
		// dd($edu);
		$jobtype->update($request->all());

		return redirect('admin/jobtypes');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		JobType::destroy($id);

		return redirect('admin/jobtypes');	
	}

}
