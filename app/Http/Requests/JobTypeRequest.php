<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class JobTypeRequest extends Request {

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
			// 'id' => 'required',
			'job_name' => 'required'
		];
	}

	public function messages()
	{
		return [
			// 'id.required' => 'Kode tingkat pendidikan tidak boleh kosong',
			'job_name.required' => 'Nama Pekerjaan tidak boleh kosong'
		];		
	}	

}
