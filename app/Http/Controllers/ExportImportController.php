<?php namespace App\Http\Controllers;
use DB;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use App\Applicant;
use App\Application;
use App\Unviersity;
use App\Pesantren;
use Input;
use Session;

class ExportImportController extends Controller {

	public function __construct()
	{
		//$this->middleware('auth');
		$this->middleware('admin');
	}


	public function importtestnumber()
	{
		$application = DB::table('applications')
					->join('applicants', 'applications.user_id', '=', 'applicants.user_id')
					->whereNotNull('test_number')
					->get();

		return view('admin/importform', compact('application'));
	}

	public function afterimporttestnumber()
	{
		$application = DB::table('applications')
				->join('applicants', 'applications.user_id', '=', 'applicants.user_id')
				->whereNotNull('test_number')
				->get();
		// dd($application);
		return view('admin/importform', compact('application'));
	}

	public function uploadtestnumber()
	{
	    try
	     {
	     	$array = array();
	     	// $file = Input::file('file');
			Excel::load(Input::file('file'), function($reader) {
			//dd($reader);
	        foreach ($reader->toObject() as $row)
	        {

	        	//generate kode pt
	        	$kodept = DB::table('departements')
	        		->join('universities', 'departements.university_id', '=' ,'universities.id')
	        		->join('applications', 'applications.major_1_id', '=', 'departements.id')
	        		->join('applicants', 'applicants.user_id', '=', 'applications.user_id')

	        		->join('pesantrens', 'applicants.user_id', '=', 'pesantrens.user_id')
	        		->join('provinces', 'provinces.id', '=', 'pesantrens.province_id')

	        		->join('schools', 'applicants.user_id', '=', 'schools.user_id')
	        		->join('program_studies', 'schools.program_study_id', '=', 'program_studies.id' )

	        		->where('applicants.registration_number', '=', $row->nomor_registrasi)

	        		->select('universities.university_code', 'program_studies.prodi_code', 'provinces.province_code')
	        		->get();

	        	// dd($kodept);
	        	// kd pt =3, kd prov=2, kd prodi=2 .. make it united

	        	$test_number = "";
	        	
	        	if (strlen($kodept[0]->university_code) == 3){
	        		$ptcode	= $kodept[0]->university_code;
	        	}
	        	elseif(strlen($kodept[0]->university_code) <3){
	        		$prov =  substr_replace($kodept[0]->university_code, (3-strlen($kodept[0]->university_code) *"0") , 0, 0);	        		
	        	}
	        	else
	        	{
	        		$ptcode = substr($kodept[0]->university_code , 0,3); 	        		
	        	}
	        	$test_number.= $ptcode;


	        	if (strlen($kodept[0]->province_code) == 2) {
	        		$prov = $kodept[0]->province_code;
	        	}
	        	elseif(strlen($kodept[0]->province_code) < 2) {
	        		if (strlen($kodept[0]->province_code) == 0){
	        			$add= "00";
	        		}
	        		else{
	        			$add = "0";
	        		}
	        		$prov =  substr_replace($kodept[0]->province_code, $add, 0, 0);
	        	}
	        	else
	        	{
	        		$prov = substr($kodept[0]->province_code , 0,2); 	        		
	        	}
	        	$test_number.= $prov;

	        	if (strlen($kodept[0]->prodi_code) == 2) {
	        		$prodi = $kodept[0]->prodi_code;
	        	}
	        	elseif (strlen($kodept[0]->prodi_code) < 2) {
	        		if (strlen($kodept[0]->prodi_code) == 0){
	        			$add= "00";
	        		}
	        		else{
	        			$add = "0";
	        		}

	        		$prodi =  substr_replace($kodept[0]->prodi_code, $add, 0, 0);
	        	}
	        	else
	        	{
	        		$prov = substr($kodept[0]->prodi_code , 0,2); 	        		
	        	}
	        	$test_number.= $prodi;

	        	//save to db
	        	DB::table('applications')
	        	->join('applicants', 'applicants.user_id', '=', 'applications.user_id')
	            ->where('registration_number', $row->nomor_registrasi)
    	        ->update(['test_number' => $test_number ]);
	        }
	        Session::flash('message', 'Data is uploaded successfully.');
	       });
	          return redirect('admin/afterimport');
	      }
	      catch (\Exception $e)
	      {
	      	// dd()
	        Session::flash('message', $e->getMessage());
	        return redirect('admin/import');
	      }
	}

	public function exportapplicants()
	{
		Excel::create('biodata pendaftar', function($excel) {
	          // Set the title
	          $excel->setTitle('List Pendaftar PBSB');
	          // Chain the setters
	          $excel->setCreator('Agung Laksono')
	                ->setCompany('Kemenag');

	          $excel->sheet('biodata pendaftar', function ($sheet) {

	            // $appl = Applicant::all();

	 			// dd($tab);

	            $column = array(
	            	'No Registrasi',
	            	'nomor tes',
	            	'Nama',
	            	'Email',
	            	'jenis_kelamin',
	            	'tempat lahir',
	            	'tanggal lahir',
	            	'jumlah hafalan',
	            	'buta warna',
	            	'gangguan mental',
	            	'riwayat penyakit',
	            	'gol darah',
	            	'berat badan',
	            	'tinggi bagan',
	            	'kontak',
	            	'status menikah',
	            	'alamat pendaftar',
	            	'provinsi',
	            	'kabupaten',
	            	'nama ayah',
	            	'umur ayah',
	            	'ayah almarhum',
	            	'pendidikan ayah',
	            	'ID pekerjaan ayah',
	            	'ID rank gaji ayah',
	            	'no tpl ayah',
	            	'nama ibu',
	            	'umur ibu',
	            	'ibu almarhum',
	            	'pendidikan ibu',
	            	'pekerjaan ibu',
	            	'penghasilan ibu',
	            	'no tlp ibu',
	            	'nama pesantren',
	            	'nama kiai',
	            	'nspp',
	            	'tipe pesantren',
	            	'alamat pesantren',
	            	'nama sekolah',
	            	'nama kepala sekolah',
	            	'nisn',
	            	'status sekolah',
	            	'tahun lulus',
	            	'tipe sekolah',
	            	'pesantren di dalam pondok',
	            	'alamat sekolah',
	            	'kampus yang dipilih',
	            	'jurusan 1',
	            	'jurusan 2',
	            	'bersedia dipindahkan',
	            	'program studi',
	            	'Nilai  Sujek 1',
	            	'Nilai  Subjek 2',
	            	'Nilai  Subjek 3',
	            	'Nilai  Subjek 4',
	            	'Nilai  Subjek 5',
	            	'Ranking'
	            	);

	            $sheet->appendRow($column);

	 			$appl = DB::table('applicants AS a')
	 						->join('families AS f', 'f.user_id', '=', 'a.user_id')
	 						->join('pesantrens AS p', 'p.user_id', '=', 'a.user_id')
	 						->join('schools AS s', 's.user_id', '=', 'a.user_id')
	 						->join('applications AS ap', 'ap.user_id', '=', 'a.user_id' )
	 						->join('provinces', 'provinces.id', '=', 'a.province_id')
	 						->join('raports', 'raports.user_id', '=', 'a.user_id')
	 						->get();

	 			foreach ($appl as $applicant) {

	 				if ($applicant->color_blind == "1" ){
	 					$applicant->color_blind = 'Ya';
	 				}else {
	 					$applicant->color_blind = 'Tidak';
	 				}

	 				if ($applicant->mental_disorder == "1" ){
	 					$applicant->mental_disorder = 'Ya';
	 				}else {
	 					$applicant->mental_disorder = 'Tidak';
	 				}


	 				if ($applicant->gender == "1" ){
	 					$applicant->gender = 'Laki-Laki';
	 				}else {
	 					$applicant->gender = 'perempuan';
	 				}


	 				if ($applicant->marriage_status == "1" ){
	 					$applicant->marriage_status = 'Sudah';
	 				}else {
	 					$applicant->marriage_status = 'Belum';
	 				}

	 				if ($applicant->father_deceased == "1" ){
	 					$applicant->father_deceased = 'Meninggal';
	 				}else {
	 					$applicant->father_deceased = 'Hidup';
	 				}


                	$applicant->father_education = DB::table('education_levels')->where('id', $applicant->father_education)->pluck('education_levels.level_name');
		 			$applicant->father_job_id = DB::table('job_types')->where('id', $applicant->father_job_id)->pluck('job_types.job_name');
		 			$applicant->father_salary_id = DB::table('range_salaries')->where('id', $applicant->father_salary_id)->pluck('range_salaries.range_name');

	 				if ($applicant->mother_deceased == "1" ){
	 					$applicant->mother_deceased = 'Meninggal';
	 				}else {
	 					$applicant->mother_deceased = 'Hidup';
	 				}

                	$applicant->mother_education = DB::table('education_levels')->where('id', $applicant->mother_education)->pluck('education_levels.level_name');
                	$applicant->mother_job_id = DB::table('job_types')->where('id', $applicant->mother_job_id)->pluck('job_types.job_name');
                	$applicant->mother_income_id = DB::table('range_salaries')->where('id', $applicant->mother_income_id)->pluck('range_salaries.range_name');

                	$applicant->pesantren_type = DB::table('pesantren_types')->where('id', $applicant->pesantren_type)->pluck('pesantren_types.type_name');
                	$applicant->school_type_id = DB::table('school_types')->where('id', $applicant->school_type_id)->pluck('school_types.type_name');
                	$applicant->program_study_id = DB::table('program_studies')->where('id', $applicant->program_study_id)->pluck('program_studies.program_name');

	 				if ($applicant->inside_pondok == "1" ){
	 					$applicant->inside_pondok = 'Ya';
	 				}else {
	 					$applicant->inside_pondok = 'Tidak';
	 				}

	 				if ($applicant->school_status == "1" ){
	 					$applicant->school_status = 'Negeri';
	 				}else {
	 					$applicant->school_status = 'Swasta';
	 				}

					$applicant->university_id = DB::table('universities')->where('id', $applicant->university_id)->pluck('universities.university_name');
					$applicant->major_1_id  = DB::table('departements')->where('id', $applicant->major_1_id)->pluck('departements.departement_name');
					$applicant->major_2_id  = DB::table('departements')->where('id', $applicant->major_2_id)->pluck('departements.departement_name');

	 				if ($applicant->aggree_to_auto_move == "1" ){
	 					$applicant->aggree_to_auto_move = 'Ya';
	 				}else {
	 					$applicant->aggree_to_auto_move = 'Tidak';
	 				}


	 			}
	 			// dd($appl);

	            // getting last row number (the one we already filled and setting it to bold
	            $sheet->row($sheet->getHighestRow(), function ($row) {
	                $row->setFontWeight('bold');
	            });

	            // putting customers data as next rows
	            foreach ($appl as $applicant) {
	                $sheet->appendRow(array(
	                	$applicant->registration_number,
						$applicant->test_number,
	                	$applicant->full_name,
	                	$applicant->email,
	                	$applicant->gender,
	                	$applicant->place_birth,
	                	$applicant->date_birth,
	                	$applicant->recitation,
	                	$applicant->color_blind,
	                	$applicant->mental_disorder,
	                	$applicant->illness,
	                	$applicant->blood_type,
	                	$applicant->weight,
	                	$applicant->height,
	                	$applicant->contact,
	                	$applicant->marriage_status,
	                	$applicant->address,
	                	$applicant->province_name,
	                	$applicant->kabupaten_id,
	                	$applicant->father_name,
	                	$applicant->father_age,
	                	$applicant->father_deceased,
	                	$applicant->father_education,
	                	$applicant->father_job_id,
	                	$applicant->father_salary_id,
	                	$applicant->father_contact,
	                	$applicant->mother_name,
	                	$applicant->mother_age,
	                	$applicant->mother_deceased,
	                	$applicant->mother_education,
	                	$applicant->mother_job_id,
	                	$applicant->mother_income_id,
	                	$applicant->mother_contact,
	                	$applicant->pesantren_name,
	                	$applicant->kiai_name,
	                	$applicant->nspp,
	                	$applicant->pesantren_type,
	                	$applicant->pesantren_address,
	                	$applicant->school_name,
	                	$applicant->school_principal_name,
	                	$applicant->nisn,
	                	$applicant->school_status,
	                	$applicant->graduate_year,
	                	$applicant->school_type_id,
	                	$applicant->inside_pondok,
	                	$applicant->school_address,
						$applicant->university_id,
						$applicant->major_1_id,
						$applicant->major_2_id,
						$applicant->aggree_to_auto_move,
	                	$applicant->program_study_id,
						$applicant->subject_1,
						$applicant->subject_2,
						$applicant->subject_3,
						$applicant->subject_4,
						$applicant->subject_5,
						$applicant->ranking,
	                	));

	            }
	          });

	        })->export('xls');
		 Session::flash('message', 'Customer uploaded successfully.');
	}
}
