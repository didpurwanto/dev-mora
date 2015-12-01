<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\User;
use PDF;
use Auth;
use App\Raport;
use App\School;
use App\ProgramStudy;

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

		return view('summary', compact('user','date_birth','listSubjects','subject_1','subject_2','subject_3','subject_4','subject_5','ranking'));
	}

	public function cetak()
	{
		//$applicant = Applicant::findOrFail($id);
		$applicant = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();

		return view('prints',compact('applicant'));
	}

	public function cetakFormulir(){
		//$applicant = Applicant::findOrFail($id);

		//$pdf = PDF::loadView('print.formulir_wrapper');
		//$pdf = $pdf->setPaper('f4');
		//return $pdf->download('Fomulir.pdf');

		return view('print.formulir_wrapper');
	}

	public function cetakKartu($id){
		//$applicant = Applicant::findOrFail($id);

		$pdf = PDF::loadView('print/peserta_wrapper', $applicant);
		return $pdf->download('Kartu Peserta.pdf');
	}
}
