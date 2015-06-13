<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RaportRequest extends Request {

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
			// 'subject_1' => 'required',
			// 'subject_2' => 'required',
			// 'subject_3' => 'required',
			// 'subject_4' => 'required',
			// 'subject_5' => 'required',
			//'ranking' => 'required'
		];
	}
	
	public function messages()
	{
		return [
			// 'subject_1.required' => 'Nilai pelajaran tidak boleh kosong',
			// 'subject_2.required' => 'Nilai pelajaran tidak boleh kosong',
			// 'subject_3.required' => 'Nilai pelajaran tidak boleh kosong',
			// 'subject_4.required' => 'Nilai pelajaran tidak boleh kosong',
			// 'subject_5.required' => 'Nilai pelajaran tidak boleh kosong',
			//'ranking.required' => 'Nilai pelajaran tidak boleh kosong'
		];
	}

}
