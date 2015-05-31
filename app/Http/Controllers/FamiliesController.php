<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\FamilyRequest;
use App\Province;
use App\Kabupaten;
use App\Kecamatan;

class FamiliesController extends Controller {

	public function create()
	{
		$prov = Province::lists('province_name','id');
		//dd($prov);
		$kabupatens = array();
		return view('family.create', compact('prov','kabupatens'));
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
		$univ->update($request->all());
		//Return to universities controller
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
