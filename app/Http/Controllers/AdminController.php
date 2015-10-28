<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\University;
use App\Province;
use App\Application;
use App\Departement;
use App\Http\Requests\UniversityRequest;
use App\Http\Requests\DepartementRequest;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		// echo "index admin";
		return view('admin.beranda');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
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

	public function listuniversities()
	{
		$univ_list= University::lists('university_name','id');

		$dept_list= Departement::all();//lists('departement_name', 'university_id','id');
		$data = array();
		// foreach ($univ_list as $univ) {
		// 	foreach ($dept_list as $dept) {
		// 		$result = DB::table('applications')->count()
		// 			->where('university_id',$univ->id)
		// 			->where('major_id', $dept->id)
		// 			->get();

		// 		$data [$univ] [$dept] = $result;
		// 	}
		// }
		return view('admin.listuniversities', compact('univ_list','dept_list', 'data'));
	}

	/*
	* selecet by university id
	*/
// 	select departement_name, count(applications.major_1_id)
//  from departements left join applications on applications.major_1_id = departements.id
//  where departements.university_id = 1
//  group by departements.id;

	public function departementlist()
	{
		$univ_list= University::lists('university_name','id');


		$id =1;
		$dept = DB::table('departements')
			->select(['departements.departement_name', DB::raw('count(applications.major_1_id) as total'), 'departements.id'
				])
            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
            ->where('departements.university_id', $id)
            ->groupBy('departements.id')
            ->get();

         // dd($dept);

            return view('admin.departement', compact('dept', 'univ_list'));
	}

	public function listprovinces()
	{
		$prov_list = Province::all();

		$univ_list = University::all();//lists('university_name','id');
		$data= array();
		
		// foreach($prov_list as $prov){
		// 	foreach ($univ_list as $univ) {
		// 		$r = DB::('Application')
		// 			->where(	)
		// 	}
		// }
		return view('admin.listprovinces', compact('prov_list', 'univ_list'));
	}
}
