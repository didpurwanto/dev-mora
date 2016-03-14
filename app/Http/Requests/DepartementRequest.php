<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class DepartementRequest extends Request {

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
			'status' => 'required',
			'departement_name' => 'required'
		];
	}

	public function messages()
	{
		return [
			'departement_name.required' => 'Nama Departemen tidak boleh kosong',
			'status.required' => 'Silakan Pilih status Jurusan',
		];
	}

}
