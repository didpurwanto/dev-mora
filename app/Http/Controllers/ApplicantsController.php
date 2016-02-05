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

		$tahun_lahir = Setting::pluck('tahun_lahir');
		$tahun_ini = date('Y');

		$tanggal = array();
		for ($i=1; $i < 32; $i++) {
			$tanggal +=  [$i => $i];
		}

		$bulan = array();
		for ($i=1; $i < 13; $i++) {
			$bulan +=  [$i => $i];
		}

		if (is_null($tahun_lahir)) {
			$tahun_lahir = $tahun_ini-18;
		}	 			
		$tahun = array();

		for ($i=$tahun_lahir; $i <= $tahun_ini; $i++) {
			$tahun +=  [$i => $i];
		}

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
		$form = $app->update($request->except('date_birth','tanggal','bulan','tahun'));

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
}
