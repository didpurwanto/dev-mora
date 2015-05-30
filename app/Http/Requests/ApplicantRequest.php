<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApplicantRequest extends Request {

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
			'full_name' => 'required|min:3',
			'place_birth' => 'required|min:3',
			'date_birth' => 'required|date',
			'recitation' => 'required',
			'weight' => 'required',
			'height'=> 'required',
			'contact' => 'required'
		];
	}
	
	public function messages()
	{
		return [
			'full_name.required' => 'Nama Lengkap harus diisi',
			'full_name.min' => 'Nama lengkap harus lebih dari 3 huruf',
			'place_birth.required' => 'Tempat Lahir harus diisi',
			'place_birth.min' => 'Tempat Lahir harus lebih dari 3 huruf',
			'date_birth.required' => 'Tanggal Lahir harus diisi',
			'date_birth.date' => 'Tanggal lahir harus menggunakan format tanggal',
			'recitation.required' => 'Jumlah Hafalan Al-Quran harus diisi',
			'weight.required' => 'Berat Badan harus diisi',
			'height.required'=> 'Tinggi Badan harus diisi',
			'contact' => 'required'
		];
	}

}
