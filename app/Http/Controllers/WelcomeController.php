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
		$isDateLewat=0;
			//skrng >= tanggal tutup
		if (strtotime($today) >= strtotime($tanggal_tutup) ){
			$isDateLewat=1;
			// echo "now=".strtotime($today);
			// echo "closedate=".strtotime($tanggal_tutup);
		 // 	echo "isDateLewat=";

		}
		//dd($isDateLewat);

		// cek jumlah
		$nomor_registrasi = DB::table('settings')->pluck('nomor_registrasi');
		$is6000=0;
		if ($nomor_registrasi > 6000 ){
			$is6000=1;
		 	// echo "is6000";

		}

		//1 = tutup
		$close=0;
		$c = 1; //0 mean already registration is closed and 1 mean still open
		if($pendaftaran == $c || $isDateLewat == $c  || $is6000 == $c)
		{
			//already close
		 	$close=1;
		 	// echo "pendaftaran=".$pendaftaran;
		 	// echo "datelewat=".$isDateLewat;
		 	// echo "quota=".$is6000;
		 	// dd("if");

		}
		// else
		// {
		//  	echo "pendaftaran=".$pendaftaran;
		//  	echo "datelewat=".$isDateLewat;
		//  	echo "quota=".$is6000;
		//  	// still open
		// 	$close=0;
		//  	// dd("else");

		// }
		 // dd($nomor_registrasi);


		//list jenis pesantren
		$jenis_school = DB::table('school_types')->lists('type_name','id');
		//dd($pendaftaran);
		return view('home.index',compact('pendaftaran','jenis_school','isDateLewat','is6000', 'close'));
	}

}
