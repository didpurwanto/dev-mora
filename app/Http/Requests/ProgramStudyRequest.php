<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProgramStudyRequest extends Request {

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
			'program_name' => 'required',
			'list_subject' => 'required'
		];
	}

	public function messages()
	{
		return [
			'program_name.required' => 'Nama Departemen tidak boleh kosong',
			'list_subject.required' => 'Daftar Pelajaran tidak boleh kosong'
		];
	}

}
