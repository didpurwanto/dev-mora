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
			'father_address' => 'required',
			'mother_name' => 'required',
			'mother_address' => 'required',
			
		];
	}

	public function messages()
	{
		return [
			'father_name.required' => 'Nama Ayah tidak boleh kosong',
			'father_address.required' => 'Alamat Ayah tidak boleh kosong',
			'mother_name.required' => 'Nama Ibu tidak boleh kosong',
			'mother_address.required' => 'Alamat Ibu tidak boleh kosong',
		]
	}
}
