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
				
		return view('summary',compact('app','fam'));
	}
}
