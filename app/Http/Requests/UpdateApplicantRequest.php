<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateApplicantRequest extends Request {

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
			// 'full_name' => 'required|min:3',
			//'email' => 'required|email',
			'place_birth' => 'required|min:3',
			'date_birth' => 'date',
			'recitation' => 'required|integer|min:0|max:30',
			'weight' => 'required|integer|min:20|max:200',
			'height'=> 'required|integer|min:100|max:210',
			'contact' => 'required|numeric',
			'address' => 'required',
			'kabupaten' => 'required',
			'kecamatan' => 'required',
			'kelurahan' => 'required',
			'image' => 'image|max:200'
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
			// 'full_name.required' => 'Nama Lengkap tidak boleh kosong',
			'full_name.min' => 'Nama lengkap harus lebih dari 3 huruf',
			//'email.required' => 'Alamat E-mail tidak boleh kosong',
			//'email.email' => 'Alamat E-mail tidak valid',
			'place_birth.required' => 'Tempat Lahir tidak boleh kosong',
			'place_birth.min' => 'Tempat Lahir harus lebih dari 3 huruf',
			'date_birth.required' => 'Tanggal Lahir tidak boleh kosong',
			'date_birth.date' => 'Tanggal lahir harus menggunakan format tanggal',
			'recitation.required' => 'Jumlah Hafalan Al-Quran tidak boleh kosong',
			'recitation.integer' => 'Jumlah Hafalan Al-Quran tidak boleh selain angka integer',
			'recitation.min' => 'Jumlah Hafalan Al-Quran tidak boleh dibawah 0',
			'recitation.max' => 'Jumlah Hafalan Al-Quran tidak boleh diatas 30',
			'weight.required' => 'Berat Badan tidak boleh kosong',
			'weight.integer' => 'Berat Badan harus dalam bentuk angka integer',
			'weight.min' => 'Berat badan tidak boleh dibawah 20 Kg',
			'weight.max' => 'Berat badan terlalu besar',

			'height.required'=> 'Tinggi Badan tidak boleh kosong',
			'height.integer' => 'Tinggi Badan harus dalam bentuk angka integer',
			'height.min' => 'Tinggi Badan tidak boleh dibawah 100 cm',
			'height.max' => 'Tinggi badan maksimal 210',

			'contact.required' => 'Nomor telepon tidak boleh kosong',
			'contact.numeric' => 'Nomor telepon harus berbentuk angka',

			'address.required' => 'Alamat tidak boleh kosong',
			'kabupaten.required' => 'Nama Kabupaten tidak boleh kosong',
			'kecamatan.required' => 'Nama Kecamatan tidak boleh kosong',
			'kelurahan.required' => 'Nama Kelurahan tidak boleh kosong',

			//'image.required' => 'Gambar tidak boleh kosong.',
			'image.image' => 'Harap masukan sebuah gambar.'
		];
	}

}
