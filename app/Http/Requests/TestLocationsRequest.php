<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class TestLocationsRequest extends Request {

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
			//'location_name' => 'required|unique:test_locations',
			'quota' => 'required|integer',
		];
	}

	public function messages()
	{
		return [
			//'location_name.required' => 'Nama lokasi tes harus terisi',
			//'location_name.unique' => 'Nama lokasi tersebut sudah ada',
			'quota.required' => 'Jumlah maksimal pada lokasi tes harus terisi',
			'quota.integer' => 'Jumlah harus bilangan bulat'
		];
	}

}
