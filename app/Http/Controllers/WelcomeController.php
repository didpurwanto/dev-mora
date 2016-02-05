<?php namespace App\Http\Controllers;
use DB;

class WelcomeController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		// return view('welcome');
		$pendaftaran = DB::table('settings')->pluck('tutup_pendaftaran');
		
		//list jenis pesantren
		$jenis_pesantren = DB::table('pesantren_types')->lists('type_name','id');
		//dd($pendaftaran);
		return view('home.index',compact('pendaftaran','jenis_pesantren'));
	}

}
