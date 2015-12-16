<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\RangeSalary;
use Illuminate\Http\Request;
use App\Http\Requests\RangeSalaryRequest;

class RangeSalariesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('admin');
	}
	
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$salary = RangeSalary::all();

		return view('rangesalary.index', compact('salary'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('rangesalary.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(RangeSalaryRequest $request)
	{
		RangeSalary::create($request->all());
		return redirect('admin/rangesalaries');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$salary = RangeSalary::findOrFail($id);
		return view('rangesalary.edit', compact('salary'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, RangeSalaryRequest $request)
	{
		$edu = RangeSalary::findOrfail($id);
		// dd($edu);
		$edu->update($request->all());

		return redirect('admin/rangesalaries');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		RangeSalary::destroy($id);
		return redirect('admin/rangesalaries');
	}

}
