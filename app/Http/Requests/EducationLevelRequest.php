<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class EducationLevelRequest extends Request {

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
			'id' => 'required',
			'level_name' => 'required' 
		];
	}

	public function messages()
	{
		return [
			'id.required' => 'Kode tingkat pendidikan tidak boleh kosong',
			'level_name.required' => 'Nama jenjang pendidikan tidak boleh kosong'
		];		
	}

}
