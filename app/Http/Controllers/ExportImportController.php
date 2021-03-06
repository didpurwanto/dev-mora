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
use App\Province;
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
					->whereNotNull('applications.test_number')
					->select('full_name', 'registration_number', 'applications.test_number')
					->get();
		// dd($application);
		return view('admin/importform', compact('application'));
	}
	public function afterimporttestnumber()
	{
		$application = DB::table('applications')
				->join('applicants', 'applications.user_id', '=', 'applicants.user_id')
				->whereNotNull('applications.test_number')
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
	        foreach ($reader->toObject() as $row)
	        {
				// dd(round($row->nomor_registrasi));;
	        	//generate kode pt
	        	$code_list = DB::table('departements')
	        		->join('universities', 'departements.university_id', '=' ,'universities.id')
	        		->join('applications', 'applications.major_1_id', '=', 'departements.id')
	        		->join('applicants', 'applicants.user_id', '=', 'applications.user_id')
	        		->join('pesantrens', 'applicants.pesantren_id', '=', 'pesantrens.id')
	        		->join('provinces', 'provinces.id', '=', 'pesantrens.province_id')
	        		->join('schools', 'applicants.user_id', '=', 'schools.user_id')
	        		->join('school_types', 'schools.school_type_id', '=', 'school_types.id')
	        		->join('program_studies', 'schools.program_study_id', '=', 'program_studies.id' )
	        		->where('applicants.registration_number', '=', $row->nomor_registrasi)
	        		->select('universities.university_code', 'program_studies.prodi_code', 'provinces.province_code', 'school_types.type_code')
	        		->get();
	        	// dd($code_list);
	        	// kd pt =3, kd prov=2, kd prodi=2 .. make it united
	        	$test_number = "";

	        	//kode PT
	        	if (strlen($code_list[0]->university_code) == 2){
	        		$ptcode	= $code_list[0]->university_code;
	        	}
	        	else
	        	{
	        		$ptcode = "00";
	        	}
	        	$test_number.= $ptcode;
	        	//kode province
	        	if (strlen($code_list[0]->province_code) == 2) {
	        		$prov = $code_list[0]->province_code;
	        	}
	        	else
	        	{
	        		$prov = "00";
	        	}
	        	$test_number.= $prov;
	        	//school type code
	        	if (strlen($code_list[0]->type_code) == 1) {
	        		$school_type_code = $code_list[0]->type_code;
	        	}
	        	else
	        	{
	        		$school_type_code = "0";
	        	}
	        	$test_number.= $school_type_code;
	        	//prodi
	        	if (strlen($code_list[0]->prodi_code) == 1) {
	        		$prodi = $code_list[0]->prodi_code;
	        	}
	        	else
	        	{
	        		$prodi = "0";
	        	}
	        	$test_number.= $prodi;

	        	// dd($test_number);
	        	//save to db
	        	DB::table('applications')
	        	->join('applicants', 'applicants.user_id', '=', 'applications.user_id')
	            ->where('registration_number', $row->nomor_registrasi)
    	        ->update(['applications.test_number' => $test_number ]);
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
								'provinsi pesantren',
	            	'nama sekolah',
	            	'nama kepala sekolah',
	            	'nisn',
	            	'status sekolah',
	            	'tahun lulus',
	            	'tipe sekolah',
	            	'pesantren di dalam pondok',
	            	'alamat sekolah',
								'provinsi sekolah',
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
	            	'Ranking',
								'Path Pas Photo',
								'Lokasi Tes'
	            	);
	            $sheet->appendRow($column);
	 			$appl = DB::table('applicants AS a')
	 						->join('families AS f', 'f.user_id', '=', 'a.user_id')
	 						->join('pesantrens AS p', 'p.id', '=', 'a.pesantren_id')
	 						->join('schools AS s', 's.user_id', '=', 'a.user_id')
	 						->join('applications AS ap', 'ap.user_id', '=', 'a.user_id' )
	 						->join('provinces', 'provinces.id', '=', 'a.province_id')
	 						->join('raports', 'raports.user_id', '=', 'a.user_id')
							->where('registration_number', '<>', '')
	 						->get();
				// dd($appl);	 						
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
                	$applicant->mother_income_id = DB::table('range_salaries')->where('id', $applicant->mother_salary_id)->pluck('range_salaries.range_name');
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

					//for location test
					$applicant->locationtest = DB::table('provinces')->where('id', $applicant->test_location_id)->pluck('provinces.province_name');
					//for email get from user table
					$applicant->email = DB::table('users')->where('id', $applicant->user_id)->pluck('users.email');
					// dd($applicant);
					// alamat province pesantren
					$applicant->province_pesantren = DB::table('pesantrens')->where('id', $applicant->pesantren_id)->pluck('province_id');
					$applicant->province_pesantren = DB::table('provinces')->where('id',$applicant->province_pesantren)->pluck('province_name');
					// alamat province school
					$applicant->province_school = DB::table('schools')->where('user_id', $applicant->user_id)->pluck('province_id');
					$applicant->province_school = DB::table('provinces')->where('id', $applicant->province_school)->pluck('province_name');

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
	                	$applicant->kabupaten,
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
										$applicant->province_pesantren,
	                	$applicant->school_name,
	                	$applicant->school_principal_name,
	                	$applicant->nisn,
	                	$applicant->school_status,
	                	$applicant->graduate_year,
	                	$applicant->school_type_id,
	                	$applicant->inside_pondok,
	                	$applicant->school_address,
										$applicant->province_school,
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
						$applicant->profile_photo,
						$applicant->locationtest,
	                	));
	            }
	          });
	        })->export('xls');
		 Session::flash('message', 'Customer uploaded successfully.');
	}

	public function testlocationlist()
	{

		$prov_list= Province::lists('province_name','id');

		// $id =1;
		$dept = DB::table('departements')
			->select(['departements.departement_name', 'universities.university_name', 'departements.departement_code' ,DB::raw('count(applications.major_1_id) as total'), 'departements.id'
				])
            ->leftJoin('applications', 'departements.id', '=', 'applications.major_1_id')
            ->leftJoin('universities', 'departements.university_id', '=', 'universities.id')
            ->groupBy('departements.id')
            ->get();
        $prov = "Semua Provinsi";
        //$totalAktif= Departement::where('status', '=', 1)->count();
        //$totalNonAktif= Departement::where('status', '=', '')->count();
        // $count = User::where('votes', '>', 100)->count();
         // dd($totalNonAktif);
		// dd($dept);
 		$counter = 0;

    return view('admin.testlocation', compact('dept', 'prov_list', 'prov', 'totalAktif', 'totalNonAktif', 'counter'));
	}

	public function listtestlocation()
	{

		// $id = 1;
		// dd($id);
		$prov_list= Province::lists('province_name','id');

		Excel::create('biodata pendaftar', function($excel) {
			  // dd($id_prov);
	          // Set the title
	          $excel->setTitle('List Pendaftar PBSB');
	          // Chain the setters
	          $excel->setCreator('Agung Laksono')
	                ->setCompany('Kemenag');
	          $excel->sheet('biodata pendaftar', function ($sheet) {
				$id_prov = Input::get('province_id');
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
								'provinsi pesantren',
	            	'nama sekolah',
	            	'nama kepala sekolah',
	            	'nisn',
	            	'status sekolah',
	            	'tahun lulus',
	            	'tipe sekolah',
	            	'pesantren di dalam pondok',
	            	'alamat sekolah',
								'provinsi sekolah',
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
	            	'Ranking',
								'Path Pas Photo',
								'Lokasi Tes'
	            	);
	            $sheet->appendRow($column);
	 			// dd($id_prov);
	 			$appl = DB::table('applicants AS a')
	 						->join('families AS f', 'f.user_id', '=', 'a.user_id')
	 						->join('pesantrens AS p', 'p.id', '=', 'a.pesantren_id')
	 						->join('schools AS s', 's.user_id', '=', 'a.user_id')
	 						->join('applications AS ap', 'ap.user_id', '=', 'a.user_id' )
	 						->join('provinces', 'provinces.id', '=', 'a.province_id')
	 						->join('raports', 'raports.user_id', '=', 'a.user_id')
							->where('p.province_id', '=', $id_prov)
							->where('registration_number', '<>', '')
	 						->get();
				// dd($appl);	 						
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
                	$applicant->mother_income_id = DB::table('range_salaries')->where('id', $applicant->mother_salary_id)->pluck('range_salaries.range_name');
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

					//for location test
					$applicant->locationtest = DB::table('provinces')->where('id', $applicant->test_location_id)->pluck('provinces.province_name');
					//for email get from user table
					$applicant->email = DB::table('users')->where('id', $applicant->user_id)->pluck('users.email');
					// dd($applicant);
					// alamat province pesantren
					$applicant->province_pesantren = DB::table('pesantrens')->where('id', $applicant->pesantren_id)->pluck('province_id');
					$applicant->province_pesantren = DB::table('provinces')->where('id',$applicant->province_pesantren)->pluck('province_name');
					// alamat province school
					$applicant->province_school = DB::table('schools')->where('user_id', $applicant->user_id)->pluck('province_id');
					$applicant->province_school = DB::table('provinces')->where('id', $applicant->province_school)->pluck('province_name');

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
	                	$applicant->kabupaten,
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
										$applicant->province_pesantren,
	                	$applicant->school_name,
	                	$applicant->school_principal_name,
	                	$applicant->nisn,
	                	$applicant->school_status,
	                	$applicant->graduate_year,
	                	$applicant->school_type_id,
	                	$applicant->inside_pondok,
	                	$applicant->school_address,
										$applicant->province_school,
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
						$applicant->profile_photo,
						$applicant->locationtest,
	                	));
	            }
	          });
	        })->export('xls');
		 Session::flash('message', 'Customer uploaded successfully.');		
	 		$counter = 0;

      return view('admin.testlocation', compact('dept', 'prov_list', 'prov', 'totalAktif', 'totalNonAktif', 'counter'));
	}
}
