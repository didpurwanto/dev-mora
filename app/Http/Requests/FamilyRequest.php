<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class FamilyRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		// user level here.
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
			'father_name' => 'required',
			'father_age' => 'required|integer|min:20|max:100',
			'mother_name' => 'required',
			'mother_age' => 'required|integer|min:20|max:100',
			'address' => 'required',
			'anak_ke' => 'required|integer|min:1|max:20',
			'saudara' => 'required|integer|min:1|max:20',
			'kabupaten' => 'required',
			'kecamatan' => 'required',
			'kelurahan' => 'required'
		];
	}

	public function messages()
	{
		return [
			'father_name.required' => 'Nama Ayah tidak boleh kosong',
			'father_age.required' => 'Umur Ayah tidak boleh kosong',
			'father_age.integer' => 'Umur Ayah harus angka integer (angka tanpa koma)',
			'father_age.min' => 'Umur Ayah minimal 20 tahun',
			'father_age.max' => 'Umur Ayah maksimal 100 tahun',
			'mother_name.required' => 'Nama Ibu tidak boleh kosong',
			'mother_age.required' => 'Umur Ibu tidak boleh kosong',
			'mother_age.integer' => 'Umur Ibu harus angka integer (angka tanpa koma)',
			'mother_age.min' => 'Umur Ibu minimal 20 tahun',
			'mother_age.max' => 'Umur Ibu maksimal 100 tahun',
			'address.required' => 'Alamat orang tua tidak boleh kosong',
			'anak_ke.required' => 'Anak Ke Berapa tidak boleh kosong',
			'anak_ke.integer' => 'Anak Ke Harus Angka Integer',
			'saudara.required' => 'Jumlah Saudara Berapa tidak boleh kosong',
			'saudara.integer' => 'Anak Ke Harus Angka Integer',
			'kabupaten.required' => 'Nama Kabupaten tidak boleh kosong',
			'kecamatan.required' => 'Nama Kecamatan tidak boleh kosong',
			'kelurahan.required' => 'Nama Kelurahan tidak boleh kosong'
		];
	}
}
