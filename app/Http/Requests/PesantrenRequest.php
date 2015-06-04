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
			'nipp' => 'required|integer|max:12',
			'pesantren_type' => 'required',
			'pesantren_address' => 'required',
			'province_id' => 'required',
			'kabupaten_id' => 'required',
			'kecamatan_id' => 'required'
		];
	}
	
	public function messages()
	{
		return [
			'pesantren_name.required' => 'Nama Pesantren tidak boleh kosong',
			'nipp.required' => 'Nomor Statistik Pondok Pesantren (NSPP) tidak boleh kosong',
			'nipp.integer' => 'Nomor Statistik Pondok Pesantren (NSPP) harus angka',
			'nipp.max' => 'Nomor Statistik Pondok Pesantren (NSPP) hanya 12 Digit',
			'pesantren_type.required' => 'Jenis Pesantren tidak boleh kosong',
			'pesantren_address.required' => 'Alamat Pesantren tidak boleh kosong',
			'province_id.required' => 'Provinsi tidak boleh kosong',
			'kabupaten_id.required' => 'Kabupaten tidak boleh kosong',
			'kecamatan_id.required' => 'Kecamatan tidak boleh kosong'
		];
	}

}
