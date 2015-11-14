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
		$total_pendaftar = DB::table('applicants')->count();
         // dd($total_pendaftar);

		// return view('admin.beranda')->with('total_pendaftar','$total_pendaftar');
		return view('admin.beranda', compact('total_pendaftar'));
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

	// public function listuniversities()
	// {
	// 	$univ_list= University::lists('university_name','id');

	// 	$dept_list= Departement::all();//lists('departement_name', 'university_id','id');
	// 	$data = array();
	// 	// foreach ($univ_list as $univ) {
	// 	// 	foreach ($dept_list as $dept) {
	// 	// 		$result = DB::table('applications')->count()
	// 	// 			->where('university_id',$univ->id)
	// 	// 			->where('major_id', $dept->id)
	// 	// 			->get();

	// 	// 		$data [$univ] [$dept] = $result;
	// 	// 	}
	// 	// }
	// 	return view('admin.listuniversities', compact('univ_list','dept_list', 'data'));
	// }

	/*
	* selecet by university id
	*/
// 	select departement_name, count(applications.major_1_id)
//  from departements left join applications on applications.major_1_id = departements.id
//  where departements.university_id = 1
//  group by departements.id;

	public function departementlist($id)
	{
		$univ_list= University::lists('university_name','id');


		// $id =1;
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



// select provinces.province_name, count(applicants.id) from provinces
// left join applicants on provinces.id = applicants.province_id
// group by provinces.id;

// select provinces.province_name, count(applicants.id) from provinces
// left join applicants on provinces.id = applicants.province_id
// group by provinces.id;

	public function listprovinces()
	{
		// // $prov_list = Province::all();
		// $id= 1;
		$univ_list = University::all();//lists('university_name','id');
		// $data= array();
		
		$prov_list = DB::table('provinces')
			->select(['provinces.province_name', DB::raw('count(applicants.id) as total'), 'provinces.id'])
			->leftJoin('applicants', 'provinces.id','=', 'applicants.province_id' )
			// ->where('university_id',$id)
			->groupBy('provinces.id')
			->get();

		
		$data = array();
		$univ = DB::table('universities')
			->select('id', 'university_name','university_code')
			->get();

		$prov = DB::table('provinces')
			->select('id','province_name')
			->get();
		$value = 0;
		foreach ($prov as $province) {
			foreach ($univ as $university) {			
				// echo $province->id;
				$val = DB::table('applicants')
					->select('full_name')
					->leftJoin('applications','applicants.user_id','=', 'applications.user_id')
					->where('applications.university_id',$university->id)
					->where('applicants.province_id', $province->id)
					->get();
				if (count($val)) {
					$value =  count($val);
				}
				else{
					$value=0;
				}

				$data[$province->province_name][$university->university_name] = $value;
			}
 		}

		return view('admin.listprovinces', compact('univ','prov', 'prov_list', 'data'));

	}
}
