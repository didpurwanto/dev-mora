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
		// cek pendaftaran
		$pendaftaran = DB::table('settings')->pluck('tutup_pendaftaran');

		// cek tanggal
		$tanggal_tutup = DB::table('settings')->pluck('tanggal_tutup');
		$today = date("Y-m-d");
		//dd($pendaftaran);
		$isDateLewat=false;
		if (strtotime($today) >= strtotime($tanggal_tutup)){
			$isDateLewat=true;
		}
		//dd($isDateLewat);

		// cek jumlah
		$nomor_registrasi = DB::table('settings')->pluck('nomor_registrasi');
		$is6000=false;
		if (6000 <= $nomor_registrasi ){
			$is6000=true;
		}

		//list jenis pesantren
		$jenis_school = DB::table('school_types')->lists('type_name','id');
		//dd($pendaftaran);
		return view('home.index',compact('pendaftaran','jenis_school','isDateLewat','is6000'));
	}

}
