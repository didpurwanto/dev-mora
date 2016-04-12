<?php namespace App\Http\Controllers;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\TestLocation;
use App\Province;
use Illuminate\Http\Request;
use App\Http\Requests\TestLocationsRequest;

class TestLocationsController extends Controller {

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
		$test_locations = TestLocation::all();

		$locations = DB::table('applications')
			->join('provinces', 'provinces.id' , '=', 'applications.test_location_id')
			->join('applicants', 'applicants.user_id', '=', 'applications.user_id')
			->join('test_locations', 'test_locations.province_id', '=', 'provinces.id')
			->where('applicants.registration_number', '<>', '')
			->groupBy('province_name')
			->select(['provinces.id','province_name', 'quota' ,DB::raw('count(applicants.id) as total')])
			->get();

		#todo: select all test location, eventhough there's no pendaftar on that location

		// dd($locations);
		return view('testlocation.index', compact('locations'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
    $prov = Province::lists('province_name','id');

		return view('testlocation.create',compact('prov'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(TestLocationsRequest $request)
	{
    //dd($request);
		TestLocation::create($request->all());
		return redirect('admin/testlocations');
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
		$location = TestLocation::findOrFail($id);

		return view('testlocation.edit', compact('location','prov'));

	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, TestLocationsRequest $request)
	{
		$location = TestLocation::findOrfail($id);
		 //dd($request);
		$location->update($request->all());

		return redirect('admin/testlocations');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		TestLocation::destroy($id);
		return redirect('admin/testlocations');
	}

}
