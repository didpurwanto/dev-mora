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
			'date_birth' => 'date',
			'recitation' => 'required|integer|min:0|max:30',
			'weight' => 'required',
			'height'=> 'required',
			'contact' => 'required',
			'profile_photo' => 'required|image|mimes:jpeg,jpg,bmp,png,gif|max:1000'
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
			'place_birth.required' => 'Tempat Lahir tidak boleh kosong',
			'place_birth.min' => 'Tempat Lahir harus lebih dari 3 huruf',
			'date_birth.required' => 'Tanggal Lahir tidak boleh kosong',
			'date_birth.date' => 'Tanggal lahir harus menggunakan format tanggal',
			'recitation.required' => 'Jumlah Hafalan Al-Quran tidak boleh kosong',
			'recitation.integer' => 'Jumlah Hafalan Al-Quran tidak boleh selain angka integer',
			'recitation.min' => 'Jumlah Hafalan Al-Quran tidak boleh dibawah 0',
			'recitation.max' => 'Jumlah Hafalan Al-Quran tidak boleh diatas 30',
			'weight.required' => 'Berat Badan tidak boleh kosong',
			'height.required'=> 'Tinggi Badan tidak boleh kosong',
			'contact.required' => 'Nomor yang bisa dihungi tidak boleh kosong',
			'profile_photo.required' => 'Gambar harus dimasukan',
			'profile_photo.max' => 'Gambar harus lebih kecil dari 1000KB',
			'profile_photo.mimes' => 'Gambar harus menggunakan format gambar (jpeg, jpg, png, bmp, dan gif)'
		];
	}

}
