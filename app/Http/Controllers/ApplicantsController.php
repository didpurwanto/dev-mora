<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use Auth;
use Illuminate\Http\Request;
use App\Applicant;
use App\Province;
use App\Kabupaten;
use App\Kecamatan;
use App\Http\Requests\ApplicantRequest;
use App\Http\Requests\UpdateApplicantRequest;
use App\Family;
use App\Setting;
use App\School;
use App\SchoolType;
use App\TestLocation;
use App\Application;

class ApplicantsController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
		//$this->middleware('isfinish');
		$this->middleware('finish');
	}
	/**
	 * Create view for create data.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function create()
	{
		$listRecitation = array();
		for ($i=0; $i < 31; $i++) {
			$listRecitation +=  [$i => $i];
		}
		$prov = Province::lists('province_name','id');
		return view('applicant.create', compact('prov','listRecitation'));
	}

	/**
	 * Insert data into database.
	 *
	 * @param  ApplicantRequest  $request
	 * @return Response
	 */
	public function store(ApplicantRequest $request)
	{

		//$data = new Applicant($request->all());
		//$form = Auth::user()->applicant()->save($data);


		//Family::create(array('applicant_id' => $data));
		//DB::table('families')->insert(array('user_id' => Auth::user()->id));
		//DB::table('pesantrens')->insert(array('user_id' => Auth::user()->id));
		//DB::table('schools')->insert(array('user_id' => Auth::user()->id));
		//DB::table('raports')->insert(array('user_id' => Auth::user()->id));
		//DB::table('applications')->insert(array('user_id' => Auth::user()->id));


		//return redirect('families/create');
		//return redirect('families/'. Auth::user()->id);
	}

	/**
	 * Edit data from Applicant.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$app = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//$app = Applicant::findOrFail($id);

		$prov = Province::lists('province_name','id');
		//$kab = Kabupaten::where('id',$app->kabupaten_id)->lists('kabupaten_name','id');
		//$kec = Kecamatan::where('id',$app->kecamatan_id)->lists('kecamatan_name','id');

		//$tahun_lahir = Setting::pluck('tahun_lahir');
		$tahun_ini = date('Y');

		$tanggal = array();
		for ($i=1; $i < 32; $i++) {
			$tanggal +=  [$i => $i];
		}

		$bulan = array();
		for ($i=1; $i < 13; $i++) {
			$bulan +=  [$i => $i];
		}

		//if (is_null($tahun_lahir)) {
		//	$tahun_lahir = $tahun_ini-18;
		//}
		// if pesantren type == muadalah or salafy muadalah
		$school_type = School::where('user_id', '=', Auth::user()->id)->pluck('school_type_id');
		$umur = SchoolType::where('id','=',$school_type)->pluck('max_age');

		$tahun = array();
		for ($i=$tahun_ini-$umur; $i <= $tahun_ini-15; $i++) {
			$tahun +=  [$i => $i];
		}
		// dd($tahun);
		$listRecitation = array();
		for ($i=0; $i < 31; $i++) {
			$listRecitation +=  [$i => $i];
		}

		// pecah pelajaran dengan tanda ';'
		$tanggal_lahir = explode("-",$app->date_birth);
		//dd($tanggal_lahir);

		return view('applicant.edit', compact('app','prov','tanggal','bulan','tahun','tanggal_lahir','listRecitation'));
	}

	/**
	 * Update data from Applicant.
	 *
	 * @param  int  $id, ApplicantRequest $request
	 * @return Redirect
	 */
	public function update(UpdateApplicantRequest $request)
	{
		$app = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//$app = Applicant::findOrFail($id);

		$tanggal_lahir = [$request->tahun,$request->bulan,$request->tanggal];
		$tanggal_lahir1 = implode("-",$tanggal_lahir);
		$app->date_birth = $tanggal_lahir1;

		//Save record to the database
		$form = $app->update($request->except('date_birth','tanggal','bulan','tahun','image'));
		$imageName = "";

		//dd($request->file('image'));
		if($request->file('image')!=null){
			$imageName = $app->full_name .'-'. $app->user_id .'.' . $request->file('image')->getClientOriginalExtension();
			$request->file('image')->move(
	        base_path() . '/public/images/profil/', $imageName
	    );
		}else{
			$imageName = "foto.jpg";
		}
		$path = "images/profil/". $imageName;
		$app->profile_photo = $path;

		//update if the table is filled with content it should.
		$app->finish = 1;
		//sava the update
		$app->save();

		//Return
		return redirect('families');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function getUploadForm()
	{
		return view('applicant.upload');
	}

	public function postUpload()
	{
		//echo 'henri';
		//dd($request->all());
		//Applicant::create($request->except('profile_photo'));

		//$imageName = $request->full_name . '.' . $request->file('photo')->getClientOriginalExtension();
		//dd($imageName);
		//$request->file('photo')->move(base_path() . '/public/images/photos/', $imageName);

		//$request['photo'] = $imageName;
		//dd('henri');
		 $file = \Input::file('image');
		 $input = array('image' => $file);
		 $rules = array('image' => 'image');
		 $validator = \Validator::make($input, $rules);

		 if ( $validator->fails() )
		 {
			return ['success' => false, 'errors' => $validator->getMessageBag()->toArray()];
		 }
		 else {
			 $destinationPath = 'images/photos/';
			 $filename = $file->getClientOriginalName();
			 \Input::file('image')->move($destinationPath, $filename);
			 return ['success' => true, 'file' => asset($destinationPath.$filename)];
		 }

	}

	public function editlokasi()
	{
		$application = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		$applicant = Applicant::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//for location test
		$prov = Province::lists('province_name','id');

		$location = TestLocation::lists('location_name','id');

		return view('locationtest.edit', compact('prov','applicant','application','location'));
	}

	public function updatelokasi(Request $request)
	{
		//$appl = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//Save record to the database
		//$form = $appl->update($request->loca());

		$registrasi = Application::where('user_id', '=', Auth::user()->id)->firstOrFail();
		// dd($registrasi);
	  $registrasi->test_location_id = $request->location_name;
		//dd($request->location_name);
    $registrasi->save();

		//update number registration
		DB::table('test_locations')->increment('counter');

		//Return
		return redirect('summary');
	}

	public function getListTestLocation($province_id)
	{
		//$listTestLocations = TestLocation::where('province_id', $province_id)->get();
		$listTestLocations = DB::table('test_locations')
												->select('id', 'location_name')
												->where('province_id', '=', $province_id)
												->where('quota', '<', 'counter')
												->get();
		//dd($listTestLocations);
		$options = array();
		foreach ($listTestLocations as $listTestLocation) {
				$options += array($listTestLocation->id => $listTestLocation->location_name);
		}

		//dd($options);
		return $options;
	}
}
