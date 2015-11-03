<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UniversityRequest extends Request {

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
			'university_code' => 'required',
			'university_name' => 'required'
		];
	}

	public function messages()
	{
		return [
			'university_code.required' => 'Kode Universitas tidak boleh kosong',
			'university_name.required' => 'Nama Universitas tidak boleh kosong'
		];
	}
}
