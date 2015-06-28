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
			'email' => 'required|email',
			'place_birth' => 'required|min:3',
			'date_birth' => 'date',
			'recitation' => 'required|min:0|max:30',
			'weight' => 'required',
			'height'=> 'required',
			'contact' => 'required',
			'address' => 'required'
		];
	}

	/**
	 * Get the validation rules messages customs.
	 *
	 * @return array
	 */
	public function messages()
	{
		return [
			'full_name.required' => 'Nama Lengkap tidak boleh kosong',
			'full_name.min' => 'Nama lengkap harus lebih dari 3 huruf',
			'email.required' => 'Alamat E-mail tidak boleh kosong',
			'email.email' => 'Alamat E-mail tidak valid',
			'place_birth.required' => 'Tempat Lahir tidak boleh kosong',
			'place_birth.min' => 'Tempat Lahir harus lebih dari 3 huruf',
			'date_birth.required' => 'Tanggal Lahir tidak boleh kosong',
			'date_birth.date' => 'Tanggal lahir harus menggunakan format tanggal',
			'recitation.required' => 'Jumlah Hafalan Al-Quran tidak boleh kosong',
			'recitation.min' => 'Jumlah Hafalan Al-Quran tidak boleh dibawah 0',
			'recitation.max' => 'Jumlah Hafalan Al-Quran tidak boleh diatas 30',
			'illness.required' => 'Riwayat penyakit tidak boleh kosong',
			'weight.required' => 'Berat Badan tidak boleh kosong',
			'height.required'=> 'Tinggi Badan tidak boleh kosong',
			'contact.required' => 'Nomor yang bisa dihubungi tidak boleh kosong',
			'address.required' => 'Alamat tidak boleh kosong'
		];
	}

}
