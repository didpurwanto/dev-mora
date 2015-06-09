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
			'father_address' => 'required',
			'mother_name' => 'required',
			'mother_age' => 'required|integer|min:20|max:100'
			
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
			'father_address.required' => 'Alamat Ayah tidak boleh kosong',
			'mother_name.required' => 'Nama Ibu tidak boleh kosong',
			'mother_age.required' => 'Umur Ibu tidak boleh kosong',
			'mother_age.integer' => 'Umur Ibu harus angka integer (angka tanpa koma)',
			'mother_age.min' => 'Umur Ibu minimal 20 tahun',
			'mother_age.max' => 'Umur Ibu maksimal 100 tahun'
		];
	}
}
