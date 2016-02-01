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
		//dd($pendaftaran);
		return view('home.index',compact('pendaftaran'));
	}

}
