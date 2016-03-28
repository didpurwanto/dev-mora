<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Pesantren;
use App\Applicant;
use App\Application;
use App\User;
use PDF;
use Auth;
use App\Raport;
use App\School;
use App\ProgramStudy;
use App\Province;
use DB;
use App\Setting;
use Session;
use Redirect;

class SummaryController extends Controller {

	public function __construct()
	{
		$this->middleware('auth'); // make sure someone eligible access it.
		$this->middleware('allfinish'); //check for sure all data is filled, if doesn't redirect to applicants page.
	}

	public function index()
	{
		//$app = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$user = User::where('id', '=', Auth::user()->id)->firstOrFail();

		$pesantren_id = Applicant::where('user_id', '=', Auth::user()->id)->pluck('pesantren_id');
		$pesantren = Pesantren::where('id', '=', $pesantren_id)->firstOrFail();
		dd($pesantren);
		//$fam = Family::where('applicant_id',$id)->get();
		$date_birth = explode("-",$user->applicant->date_birth);
		$date_birth = $date_birth[2].'-'.$date_birth[1].'-'.$date_birth[0];
		//dd($date_birth);
		//dd($user->family->jobType->job_name);

		// get program studi yang diambil sebagai referensi pelajaran yang akan di isi rapor
		$getProgramStudyId = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		// ambil pelajaran yang sesuai dengan program studi
		$getListSubjects = ProgramStudy::where('id', $getProgramStudyId)->pluck('list_subject');
		$listSubjects = explode("; ",$getListSubjects);

		$raports = Raport::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$subject_1 = explode(";",$raports['subject_1']);
		$subject_2 = explode(";",$raports['subject_2']);
		$subject_3 = explode(";",$raports['subject_3']);
		$subject_4 = explode(";",$raports['subject_4']);
		$subject_5 = explode(";",$raports['subject_5']);
		$ranking = explode(";",$raports['ranking']);

		return view('summary', compact('user','date_birth','listSubjects','subject_1','subject_2','subject_3','subject_4','subject_5','ranking', 'pesantren'));
	}

	public function cetak()
	{
		$apps = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		// dd($testnumber);
		$pass = 1;
		if (is_null($apps->test_number))
		{
			$pass = 0;
		}
		//$applicant = Applicant::findOrFail($id);
		$user = User::where('id', '=', Auth::user()->id)->firstOrFail();

		return view('prints',compact('user', 'pass'));
	}

	public function cetakFormulir(){
		$user = User::where('id', '=', Auth::user()->id)->firstOrFail();

		//$fam = Family::where('applicant_id',$id)->get();
		$date_birth = explode("-",$user->applicant->date_birth);
		$date_birth = $date_birth[2].'-'.$date_birth[1].'-'.$date_birth[0];
		//dd($date_birth);
		//dd($user->family->jobType->job_name);
		$pesantren_id = Applicant::where('user_id', '=', Auth::user()->id)->pluck('pesantren_id');
		$pesantren = Pesantren::where('id', '=', $pesantren_id)->firstOrFail();

		// get program studi yang diambil sebagai referensi pelajaran yang akan di isi rapor
		$getProgramStudyId = School::where('user_id', Auth::user()->id)->pluck('program_study_id');
		// ambil pelajaran yang sesuai dengan program studi
		$getListSubjects = ProgramStudy::where('id', $getProgramStudyId)->pluck('list_subject');
		$listSubjects = explode("; ",$getListSubjects);

		$raports = Raport::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$subject_1 = explode(";",$raports['subject_1']);
		$subject_2 = explode(";",$raports['subject_2']);
		$subject_3 = explode(";",$raports['subject_3']);
		$subject_4 = explode(";",$raports['subject_4']);
		$subject_5 = explode(";",$raports['subject_5']);
		$ranking = explode(";",$raports['ranking']);

		//tampilkan registration number
		$registration_number = Applicant::where('user_id','=',Auth::user()->id)->pluck('registration_number');
		$reg_num = str_split($registration_number);

		//cetak langsung download dalam bentuk PDF
		$pdf = PDF::loadView('formulir', compact('user','date_birth','listSubjects','subject_1','subject_2','subject_3','subject_4','subject_5','ranking', 'reg_num', 'pesantren'))->setPaper('legal');

		//Make user logout after prints
		// Auth::logout();

		return $pdf->download('Formulir Peserta.pdf');

		// Session::flash('download.in.the.next.request', $pdf->download('Formulir Peserta.pdf'));
		// return redirect::to('/');

	}

	// public function cetakFormulir()
	// {
	// 	$cetak = app('App\Http\Controllers\SummaryController')->cetakFormulir2();
	// 	// return view('welcome');

	// 	// dd($cetak);
	// 	$pendaftaran = DB::table('settings')->pluck('tutup_pendaftaran');

	// 	//list jenis pesantren
	// 	$jenis_pesantren = DB::table('pesantren_types')->lists('type_name','id');
	// 	//dd($pendaftaran);
	// 	return view('home.index',compact('pendaftaran','jenis_pesantren'));
	// }


	public function cetakKartu()
	{
		$user = User::where('id', '=', Auth::user()->id)->firstOrFail();

		$pesantren_id = Applicant::where('user_id', '=', Auth::user()->id)->pluck('pesantren_id');
		$pesantren = Pesantren::where('id', '=', $pesantren_id)->firstOrFail();

		//$fam = Family::where('applicant_id',$id)->get();
		$date_birth = explode("-",$user->applicant->date_birth);
		$date_birth = $date_birth[2].'-'.$date_birth[1].'-'.$date_birth[0];
		$registration_number = Applicant::where('user_id','=',Auth::user()->id)->pluck('registration_number');

		$test_number = Application::where('user_id','=',Auth::user()->id)->pluck('test_number');
		$test_num = str_split($test_number);
		// dd($test_num);
		$pdf = PDF::loadView('kartu',compact('user','date_birth', 'test_num', 'registration_number','pesantren'))->setPaper('legal');

		//Make user logout after prints
		// Auth::logout();
		// dd($user->pesantren->no_telp);
		return $pdf->download('Kartu Peserta.pdf');

		//return view('kartu',compact('user','date_birth'));
	}

	public function finalisasi()
	{
		//Generate Registasi Number
		$tahun = date("y");
		$bulan = date("m");
		$hari = date("d");
		$prov = DB::table('pesantrens')
			->join('applicants', 'applicants.pesantren_id', '=', 'pesantrens.id')
			->where('user_id', '=', Auth::user()->id)->pluck('pesantrens.province_id');
		$provinsi = Province::where('id', '=', $prov)->pluck('province_code');
		$nomor = DB::table('settings')->pluck('nomor_registrasi');
		//get four digit number to display
		$nomor4digit = $this->getNomorRegistrasi($nomor);
		$nomor_reg = $tahun.$bulan.$hari.$provinsi.$nomor4digit;
		$registrasi = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();
		// dd($registrasi);
	  $registrasi->registration_number = $nomor_reg;
    $registrasi->save();

		//update number registration
		DB::table('settings')->increment('nomor_registrasi');

		//update if the table is final.
		$user = User::where('id', '=', Auth::user()->id)->firstOrFail();
		$user->finish = 1;
		//Save record to the database
		$user->save();

		return redirect('prints');
	}


	public function getNomorRegistrasi($value)
    {
        return str_pad($value, 4, '0', STR_PAD_LEFT);
    }
}
