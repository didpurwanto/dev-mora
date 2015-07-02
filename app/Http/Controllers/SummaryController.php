<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;

class SummaryController extends Controller {

	public function index($id)
	{
		$app = Applicant::find($id);

		//$fam = Family::where('applicant_id',$id)->get();
		$date_birth = explode("-",$app->date_birth);
		$date_birth = $date_birth[2].' - '.$date_birth[1].' - '.$date_birth[0];
		//dd($date_birth);

		return view('summary',compact('app','date_birth'));
	}

	public function cetak($id)
	{
		$applicant = Applicant::findOrFail($id);

		return view('prints',compact('applicant'));
	}

	public function cetakFormulir($id){
		$applicant = Applicant::findOrFail($id);

		$pdf = PDF::loadView('print.formulir_wrapper', $applicant);
		return $pdf->download('Fomulir.pdf');
	}

	public function cetakKartu($id){
		$applicant = Applicant::findOrFail($id);

		$pdf = PDF::loadView('print.peserta_wrapper', $applicant);
		return $pdf->download('Kartu Peserta.pdf');
	}
}
