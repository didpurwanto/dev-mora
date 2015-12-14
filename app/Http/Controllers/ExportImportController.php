<?php namespace App\Http\Controllers;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Excel;
use App\Applicant;
use App\Application;
use Input;
use Session;

class ExportImportController extends Controller {

	public function importtestnumber()
	{
		$application = DB::table('applications')
					->join('applicants', 'applications.user_id', '=', 'applicants.user_id')
					->get();
					
		return view('admin/importform', compact('application'));
	}

	public function afterimporttestnumber()
	{
		$application = DB::table('applications')
				->join('applicants', 'applications.user_id', '=', 'applicants.user_id')
				->whereNotNull('applications.test_number')
				->get();
		dd($application);
		return view('admin/importform', compact('application'));
	}

	public function uploadtestnumber()
	{
	    try
	     {
	     	// $file = Input::file('file');
			Excel::load(Input::file('file'), function($reader) {
			//dd($reader);
	        foreach ($reader->toObject() as $row)
	        {
	           print $row->user_id;
        	   Application::where('user_id',$row->user_id)
        	   			->update(['test_number'=> $row->test_number]);
	        }
	        Session::flash('message', 'Data is uploaded successfully.');
	       });
	          return redirect('admin/afterimport');
	      }
	      catch (\Exception $e)
	      {
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
	 
	 			$appl = DB::table('applicants')
	 						->join('families', 'families.user_id', '=', 'applicants.user_id')
	 						->join('pesantrens', 'pesantrens.user_id', '=', 'applicants.user_id')
	 						->join('schools', 'schools.user_id', '=', 'applicants.user_id')
	 						->join('applications', 'applications.user_id', '=', 'applicants.user_id' )
	 						->get();
	 			// dd($tab);
	            
	            $column = array(
	            	'Nama', 
	            	'No Registrasi',
	            	'Email',
	            	'jenis_kelamin(1=L, 2=P)',
	            	'tempat lahir',
	            	'tanggal lahir',
	            	'jumlah hafalan',
	            	'buta warna(0=tidak, 1=ya)',
	            	'gangguan mental',
	            	'riwayat penyakit',
	            	'gol darah',
	            	'berat badan',
	            	'tinggi bagan',
	            	'kontak',
	            	'status menikah',
	            	'alamat pendaftar',
	            	'kode provinsi',
	            	'kode kabupaten',
	            	'nama ayah',
	            	'umur ayah',
	            	'ayahsdh meninggal(1=ya, 0=tdk)',
	            	'pendidikan ayah',
	            	'ID pekerjaan ayah',
	            	'ID rank gaji ayah',
	            	'no tpl ayah',
	            	'nama ibu',
	            	'umur ibu',
	            	'ibu sdh meninggal',
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
	            	'program studi',
	            	'pesantren di dalam pondok',
	            	'alamat sekolah',
	            	'kampus yang dipilih',
	            	'jurusan 1',
	            	'jurusan 2',
	            	'bersedia dipindahkan',
	            	'nomor tes'
	            	);
	 
	            $sheet->appendRow($column);
	 
	            // getting last row number (the one we already filled and setting it to bold
	            $sheet->row($sheet->getHighestRow(), function ($row) {
	                $row->setFontWeight('bold');
	            });
	 
	            // putting customers data as next rows
	            foreach ($appl as $applicant) {
	                $sheet->appendRow(array(
	                	$applicant->full_name,
	                	$applicant->registration_number,
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
	                	$applicant->province_id,
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
	                	$applicant->program_study_id,
	                	$applicant->inside_pondok,
	                	$applicant->school_address,
						$applicant->university_id,
						$applicant->major_1_id,
						$applicant->major_2_id,
						$applicant->aggree_to_auto_move,
						$applicant->test_number
	                	));

	            }
	          });
	 
	        })->export('xls');
		 Session::flash('message', 'Customer uploaded successfully.');
	}
}
