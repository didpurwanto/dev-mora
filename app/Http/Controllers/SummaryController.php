<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\User;
use PDF;
use Auth;

class SummaryController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		//$app = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$user = User::where('id', '=', Auth::user()->id)->firstOrFail();

		//$fam = Family::where('applicant_id',$id)->get();
		$date_birth = explode("-",$user->applicant->date_birth);
		$date_birth = $date_birth[2].' - '.$date_birth[1].' - '.$date_birth[0];
		//dd($date_birth);

		//dd($user->family->jobType->job_name);

		return view('summary', compact('user','date_birth'));
	}

	public function cetak($id)
	{
		$applicant = Applicant::findOrFail($id);

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
