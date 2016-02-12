<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ApplicationRequest extends Request {

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
			'university_id' => 'required|not_in:0',
			'major_1_id' => 'required|not_in:0',
			'major_2_id' => 'required|not_in:0'
		];
	}

	public function messages()
	{
		return [
			'university_id.required' => 'Anda harus memilih salah satu universitas',
			'university_id.not_in' => 'Anda harus memilih salah satu universitas',
			'major_1_id.required' => 'Anda harus memilih salah satu pilihan jurusan 1',
			'major_1_id.not_in' => 'Anda harus memilih salah satu pilihan jurusan 1',
			'major_2_id.required' => 'Anda harus memilih salah satu pilihan jurusan 2',
			'major_2_id.not_in' => 'Anda harus memilih salah satu pilihan jurusan 2'
		];
	}

}
