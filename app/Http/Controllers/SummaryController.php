<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Applicant;
use App\Family;
use App\Pesantren;
use App\School;
use App\Raport;
use App\Application;

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
}
