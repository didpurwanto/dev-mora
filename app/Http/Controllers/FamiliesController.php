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

class FamiliesController extends Controller {

	public function create()
	{
		$prov = Province::lists('province_name','id');
		$edu_level = EducationLevel::lists('level_name','id');
		$jobs = JobType::lists('job_name','id');
		$salary = RangeSalary::lists('range_name','id');
		
		//dd($prov);
		return view('family.create', compact('prov','edu_level','jobs','salary'));
	}

	
	public function store(FamilyRequest $request)
	{
		Family::create($request->all());
	}


	public function edit($id)
	{
		$fam = Family::findOrFail($id);
		return view('family.edit', compact('fam'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, FamilyRequest $request)
	{
		$fam = Family::findOrFail($id);
		//Save record to the database
		$fam->update($request->all());
		//Return to universities controller
		return redirect('educations');
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
