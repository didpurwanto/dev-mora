<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProvinceRequest extends Request {

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
			'province_code' => 'required',
			'province_name' => 'required'
		];
	}

	public function messages()
	{
		return [
			'province_code.required' => 'Kode Provinsi tidak boleh kosong',
			'province_name.required' => 'Nama Provinsi tidak boleh kosong'
		];
	}
}
