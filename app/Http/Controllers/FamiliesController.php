<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FamilyRequest;
use App\Province;
use App\Kabupaten;
use App\Kecamatan;
use App\EducationLevel;
use App\JobType;
use App\RangeSalary;
use App\Family;
use Auth;

class FamiliesController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function edit()
	{
		$fam = Family::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//$fam = Family::findOrFail($user_id);

		//$idsaja = $fam->id;
		//dd($idsaja);

		$prov = Province::lists('province_name','id');
		$edu_level = EducationLevel::lists('level_name','id');
		$jobs = JobType::lists('job_name','id');
		$salary = RangeSalary::lists('range_name','id');

		// $kab = Kabupaten::where('id',$fam->kabupaten_id)->lists('kabupaten_name','id');
		// $kec = Kecamatan::where('id',$fam->kecamatan_id)->lists('kecamatan_name','id');
		return view('family.edit', compact('fam','prov','edu_level','jobs','salary'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(FamilyRequest $request)
	{
		$fam = Family::where('user_id', '=', Auth::user()->id)->firstOrFail();
		//$affectedRows = User::where('votes', '>', 100)->update(array('status' => 2));
		//Save record to the database
		$form = $fam->update($request->all());

		//update if the table is filled with content it should.
		$fam->finish = 1;
		//sava the update
		$fam->save();
		//Return to universities controller
		return redirect('pesantrens/');
	}


	public function getKabupatens($id)
    {
        $kabupatens = Kabupaten::where('province_id', '=', $id)->get();
        //dd($kabupatens);
		$options = array();

        foreach ($kabupatens as $kabupaten) {
            $options += array($kabupaten->id => $kabupaten->kabupaten_name);
        }

		//dd($options);
        return $options;
    }

	public function getKecamatans($id)
    {
        $kecamatans = Kecamatan::where('kabupaten_id', '=', $id)->get();
        //dd($kecamatans);
		$options = array();

        foreach ($kecamatans as $kecamatan) {
            $options += array($kecamatan->id => $kecamatan->kecamatan_name);
        }

		//dd($options);
        return $options;
    }

}
