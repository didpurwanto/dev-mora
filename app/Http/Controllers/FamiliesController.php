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

class FamiliesController extends Controller {

	public function edit($applicant_id)
	{
		$fam = Family::findOrFail($applicant_id);

		$prov = Province::lists('province_name','id');
		$edu_level = EducationLevel::lists('level_name','id');
		$jobs = JobType::lists('job_name','id');
		$salary = RangeSalary::lists('range_name','id');

		$kab = Kabupaten::where('id',$fam->kabupaten_id)->lists('kabupaten_name','id');
		$kec = Kecamatan::where('id',$fam->kecamatan_id)->lists('kecamatan_name','id');

		return view('family.edit', compact('fam','prov','edu_level','jobs','salary','kab','kec'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($applicant_id, FamilyRequest $request)
	{
		$fam = Family::findOrFail($applicant_id);
		//Save record to the database
		$form = $fam->update($request->all());

		//Return to universities controller
		return redirect('pesantrens/'. $fam->applicant_id);
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
