<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminDepartementRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'departement_id' => 'required'
		];
	}

	public function messages()
	{
		return [
			'departement_id.required' => 'Id departement tidak boleh kosong'
		];
	}

}
