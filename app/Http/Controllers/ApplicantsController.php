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


class ApplicantsController extends Controller {


	public function __construct()
	{
		$this->middleware('auth');
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
		$kab = Kabupaten::where('id',$app->kabupaten_id)->lists('kabupaten_name','id');
		$kec = Kecamatan::where('id',$app->kecamatan_id)->lists('kecamatan_name','id');

		$listRecitation = array();
		for ($i=0; $i < 31; $i++) {
			$listRecitation +=  [$i => $i];
		}

		return view('applicant.edit', compact('app','prov','kab','kec','listRecitation'));
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
		//Save record to the database
		$form = $app->update($request->all());

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
