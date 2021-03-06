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
use App\Http\Requests\AdminDepartementRequest;
use Input;
use App\Setting;
use Excel;

class AdminController extends Controller {

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
		// echo "index admin";
		$total_pendaftar = DB::table('applicants')->count();
		$total_univ = DB::table('universities')->count();
		// $total_dept = DB::table('departements')->count();
		$total_pesantren = DB::table('applicants')
			->where('registration_number', '<>', '')
			->count(DB::raw('DISTINCT pesantren_id'));
         // dd($total_pesantren);
		$total_submitter = DB::table('applicants')
			->where('registration_number', '<>', '')
			->count();

		// pendaftar dan pendaftar perifikasi
		$pendaftar_validasi = DB::table('applicants')->where('registration_number', '<>', '')->count();

		// return view('admin.beranda')->with('total_pendaftar','$total_pendaftar');
		return view('admin.beranda', compact('total_pendaftar', 'total_submitter', 'total_univ', 'total_dept', 'total_pesantren'));
		// return view('admin.beranda', compact('total_pendaftar', 'total_univ', 'total_dept', 'total_pesantren','pendaftar_validasi'));
	}

	public function departementlist()
	{

		$univ_list= University::lists('university_name','id');

		// $id =1;
		$dept = DB::table('departements')
			->select(['departements.departement_name', 'universities.university_name', 'departements.departement_code' ,DB::raw('count(applications.major_1_id) as total'), 'departements.id'
				])
            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
            ->leftJoin('universities', 'departements.university_id', '=', 'universities.id')
            ->groupBy('departements.id')
            ->get();
        $univ = "Semua Universitas";
        $totalAktif= Departement::where('status', '=', 1)->count();
        $totalNonAktif= Departement::where('status', '=', '')->count();
        // $count = User::where('votes', '>', 100)->count();
         // dd($totalNonAktif);
		// dd($dept);
 		$counter = 0;

         return view('admin.departement', compact('dept', 'univ_list', 'univ', 'totalAktif', 'totalNonAktif', 'counter'));
	}

	public function departementlist2()
	{

		// $id = 1;
		$id = Input::get('university_id');
		// dd($id);
		$univ_list= University::lists('university_name','id');

		if($id == "0"){
			// dd($id);
			$dept = DB::table('departements')
				->select(['departements.departement_name', 'universities.university_name', 'departements.departement_code' ,DB::raw('count(applications.major_1_id) as total'), 'departements.id'
					])
	            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
	            ->leftJoin('universities', 'departements.university_id', '=', 'universities.id')
	            ->groupBy('departements.id')
	            ->get();

		        $univ = "Semua";
		        $totalAktif= Departement::where('status', '=', 1)->count();
		        $totalNonAktif= Departement::where('status', '=', '')->count();
		}
		else{
			$dept = DB::table('departements')
				->select(['departements.departement_name', 'universities.university_name', 'departements.departement_code' ,DB::raw('count(applications.major_1_id) as total'), 'departements.id'
					])
	            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
	            ->leftJoin('universities', 'departements.university_id', '=', 'universities.id')
	            ->where('departements.university_id', $id)
	            ->where('departements.status', 1)
	            ->groupBy('departements.id')
	            ->get();

				$univ = DB::table('universities')
	            	->where('id', '=', $id)
	            	->pluck('university_name');

		        $totalAktif= Departement::where('status', '=', 1)
		        	->where('departements.university_id', '=', $id)->count();

		        $totalNonAktif= Departement::where('status', '=', '')
		        	->where('departements.university_id', '=', $id)->count();
		        // dd($univ);
		}
	 		$counter = 0;

            return view('admin.departement', compact('dept', 'univ_list', 'univ', 'totalAktif', 'totalNonAktif', 'counter'));
	}


	public function listprovinces()
	{
		// // $prov_list = Province::all();
		// $id= 1;
		$univ_list = University::all();//lists('university_name','id');
		// $data= array();

		$prov = DB::table('provinces')
			->select('id','province_name')
			->get();

		$prov_list = DB::table('provinces')
			->select(['provinces.province_name', DB::raw('count(applicants.id) as total'), 'provinces.id'])
			->leftJoin('applicants', 'provinces.id','=', 'applicants.province_id' )
			// ->where('registration_number', '<>', "")
			// ->where('university_id',$id)
			->groupBy('provinces.id')
			->get();

		foreach ($prov_list as $index => $value) {
			if ((int)$value->total > 0)
			{
				$newTotal = DB::table('provinces')
							->select(DB::raw('count(applicants.id) as total'))
							->leftJoin('applicants', 'provinces.id','=', 'applicants.province_id' )
							->where('registration_number', '<>', "")
							->where('applicants.province_id', '=', $value->id)
							->get();
				$prov_list[$index]->total = $newTotal[0]->total;
			}
		}
		// dd($prov_list);
		$data = array();
		$univ = DB::table('universities')
			->select('id', 'university_name','university_code')
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
					->where('registration_number', '<>', "")
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

	 		$totalApplication= Application::where('user_id', '>', 0)->count();
	 		$counter = 0;
		return view('admin.listprovinces', compact('univ','prov', 'prov_list', 'data', 'totalApplication', 'counter'));
	}

	public function pesantren()
	{
		// $pesantren = DB::table('pesantrens')
		// 	//->join('pesantren_types', 'pesantren_types.id', '=', 'pesantrens.pesantren_type')
		// 	->join('provinces', 'provinces.id', '=', 'pesantrens.province_id')
		// 	->get();
		$counter = 0;
	
		$pesantren = DB::table('pesantrens')
			->select(['pesantrens.pesantren_name','pesantrens.nspp' , 'provinces.province_name', DB::raw('count(applicants.pesantren_id) as total')])
			->join('provinces', 'provinces.id', '=', 'pesantrens.province_id')
			->join('applicants', 'applicants.pesantren_id', '=', 'pesantrens.id')
			->where('registration_number', '<>', "")
			->groupBy('pesantrens.id')
			->get();

		return view('admin.pesantren', compact('pesantren', 'counter'));
	}

	// method for setting application in registration

	public function pendaftaran($id){
		$pendaftaran2 = Setting::findOrfail($id);
		//dd($pendaftaran2);
		$pendaftaran = $pendaftaran2->tutup_pendaftaran;
		$pendaftaran = array();
		$pendaftaran +=  [0 => 'Buka'];
		$pendaftaran +=  [1 => 'Tutup'];

		return view('admin.pendaftaran', compact('pendaftaran2','pendaftaran'));
	}

	// save registration option
	public function pendaftaranupdate($id, Request $request){
		$pendaftaran = Setting::findOrfail($id);

		//dd($pendaftaran);
		//$pendaftaran2 = $request
		//dd($request);
		$pendaftaran->tanggal_tutup = $request->tanggal_tutup;
		$pendaftaran->tutup_pendaftaran = $request->tutup_pendaftaran;
		$pendaftaran->save();

		return redirect('admin/pendaftaran/1');
	}

	public function list_provinces_excel()
	{
		Excel::create('Rekap Pendaftaran PBSB per provinsi', function($excel){
	        $excel->setTitle('List Pendaftar PBSB');
	        $excel->setCreator('Agung Laksono')->setCompany('Kemenag');
	        $excel->sheet('biodata pendaftar', function ($sheet){
				#show all provinces
				$prov_list = DB::table('provinces')
					->select(['provinces.province_name', DB::raw('count(applicants.id) as total'), 'provinces.id'])
					->leftJoin('applicants', 'provinces.id','=', 'applicants.province_id' )
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

				$column = array(
					'No',
					'Nama Provinsi',
				);
	 			foreach ($univ as $university) {
					array_push($column, $university->university_code);
	 			}
				array_push($column, 'Total');

	            $sheet->appendRow($column);

	            $sheet->row($sheet->getHighestRow(), function ($row) {
	                $row->setFontWeight('bold');
	            });

	            // dd($data);
	            $number =1;
	            foreach ($prov_list as $province) {
	                $row = array(
	                	$number,
	                	$province->province_name,
	                	);
	                foreach ($univ as $university) {
	                	array_push($row, $data[$province->province_name][$university->university_name]);
	                }
	                array_push($row, $province->total);
					$sheet->appendRow($row);
					$number = $number + 1;
	            }
			});
		})->export('xls');

	}

	public function list_pesantren_excel()
	{
		Excel::create('Rekap Pesantren', function($excel){
	        $excel->setTitle('Rekapitulasi Biodata Pesantren');
	        $excel->setCreator('Agung Laksono')->setCompany('Kemenag');
	        $excel->sheet('Daftar Pesantren', function ($sheet){
		  		$pesantren = DB::table('pesantrens')
					->select(['pesantrens.pesantren_name','pesantrens.nspp' , 'pesantren_address' ,'provinces.province_name', 
							'applicants.kabupaten' , DB::raw('count(applicants.pesantren_id) as total')])
					->join('provinces', 'provinces.id', '=', 'pesantrens.province_id')
					->join('applicants', 'applicants.pesantren_id', '=', 'pesantrens.id')
					->where('registration_number', '<>', "")
					->groupBy('pesantrens.id')
					->get();


				// dd($pesantren);
				$column = array(
					'Nama Pesantren',
					'NSPP',
					'Alamat Pesantren',
					'Provinsi',
					'Kabupaten',
					'Total Pendaftar'
					);

	            $sheet->appendRow($column);
	            $sheet->row($sheet->getHighestRow(), function ($row) {
	                $row->setFontWeight('bold');
	            });

	            foreach ($pesantren as $p) {
	            	$row = array(
	            		$p->pesantren_name,
	            		$p->nspp,
	            		$p->pesantren_address,
	            		$p->province_name,
	            		$p->kabupaten,
	            		$p->total
	            		);
   		            $sheet->appendRow($row);
	            }
	        });
		})->export('xls');

	}

	public function list_departement_excel()
	{
		Excel::create('Rekapitulasi Pendaftar per Jurusan', function($excel){
			$excel->setTitle('Rekapitulasi Pendaftar per Jurusan');
			$excel->setCreator('Agung Laksono')->setCompany('kemenag');
			$excel->sheet('Rekap Jurusan', function($sheet){

				$id = Input::get('university_id');

				dd($id);

				$univ_list= University::lists('university_name','id');
				// $univ_list = University::all();//lists('university_name','id');


				// $id =1;
				$dept = DB::table('departements')
					->select(['departements.departement_name', 'universities.university_name',DB::raw('count(applications.major_1_id) as total'), 'departements.id'
						])
		            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
		            ->leftJoin('universities', 'departements.university_id', '=', 'universities.id')
		            ->where('departements.university_id', $id)
		            ->groupBy('departements.id')
		            ->get();

			});
		});
	}
}
