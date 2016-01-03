<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class RangeSalaryRequest extends Request {

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
			'range_name' => 'required'
		];
	}

	public function messages()
	{
		return [
			'range_name.required' => 'Kolom range gaji harus terisi'
		];
	}

}
