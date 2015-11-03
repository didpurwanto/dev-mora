<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SchoolTypeRequest extends Request {

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
			'type_name' => 'required'
		];
	}

	public function messages()
	{
		return [
			'type_name.required'  => 'Kolom Tipe sekolah harus diisi'
		];
	}

}
