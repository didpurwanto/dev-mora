<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class PesantrenRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			//'applicant_id',
			'pesantren_name' => 'required',
			'kiai_name' => 'required',
			'nspp' => 'required|numeric',
			'pesantren_type' => 'required',
			'pesantren_address' => 'required',
			'province_id' => 'required'
			//'kabupaten_id' => 'required',
			//'kecamatan_id' => 'required'
		];
	}

	public function messages()
	{
		return [
			'pesantren_name.required' => 'Nama Pesantren tidak boleh kosong',
			'kiai_name.required' => 'Nama Pimpinan Pondok tidak boleh kosong',
			'nspp.required' => 'Nomor Statistik Pondok Pesantren (NSPP) tidak boleh kosong',
			'nspp.numeric' => 'Nomor Statistik Pondok Pesantren (NSPP) harus angka',
			'pesantren_type.required' => 'Jenis Pesantren tidak boleh kosong',
			'pesantren_address.required' => 'Alamat Pesantren tidak boleh kosong',
			'province_id.required' => 'Provinsi tidak boleh kosong'
			//'kabupaten_id.required' => 'Kabupaten tidak boleh kosong',
			//'kecamatan_id.required' => 'Kecamatan tidak boleh kosong'
		];
	}

}
