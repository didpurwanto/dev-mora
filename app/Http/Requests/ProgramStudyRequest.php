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
			'prodi_code' => 'required',
			'program_name' => 'required',
			'list_subject' => 'required'
		];
	}

	public function messages()
	{
		return [
			'prodi_code.required' => 'Kode program studi tidak boleh kosong',
			'program_name.required' => 'Nama Program studitidak boleh kosong',
			'list_subject.required' => 'Daftar Pelajaran tidak boleh kosong'
		];
	}

}
