<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\University;
use App\Province;
use App\Application;
use App\Departement;
use App\Pesantren;
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
		$total_pendaftar = DB::table('applications')->count();
		$total_univ = DB::table('universities')->count();
		$total_dept = DB::table('departements')->count();		
		$total_pesantren = DB::table('pesantrens')->count(DB::raw('DISTINCT pesantren_name'));
         // dd($total_pesantren);

		// return view('admin.beranda')->with('total_pendaftar','$total_pendaftar');
		return view('admin.beranda', compact('total_pendaftar', 'total_univ', 'total_dept', 'total_pesantren'));
	}

	public function departementlist()
	{

		$univ_list= University::lists('university_name','id');

		// $id =1;
		$dept = DB::table('departements')
			->select(['departements.departement_name', 'universities.university_name',DB::raw('count(applications.major_1_id) as total'), 'departements.id'
				])
            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
            ->leftJoin('universities', 'departements.university_id', '=', 'universities.id')
            ->groupBy('departements.id')
            ->get();

         // dd($univ_list);

         return view('admin.departement', compact('dept', 'univ_list'));
	}

	public function departementlist2()
	{
		
		$id = 0;

		$univ_list= University::lists('university_name','id');
		$univ_list = University::all();//lists('university_name','id');


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

	public function pesantren()
	{
		$pesantren = DB::table('pesantrens')
			->join('pesantren_types', 'pesantren_types.id', '=', 'pesantrens.pesantren_type')
			->join('provinces', 'provinces.id', '=', 'pesantrens.province_id')
			->get();

		return view('admin.pesantren', compact('pesantren'));
	}
}
