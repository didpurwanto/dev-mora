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
			'p1s1' => 'required|integer|min:60|max:100','p1s2' => 'required|integer|min:60|max:100','p1s3' => 'required|integer|min:60|max:100','p1s4' => 'required|integer|min:60|max:100','p1s5' => 'required|integer|min:60|max:100','p1s6' => 'required|integer|min:60|max:100',
			'p2s1' => 'required|integer|min:60|max:100','p2s2' => 'required|integer|min:60|max:100','p2s3' => 'required|integer|min:60|max:100','p2s4' => 'required|integer|min:60|max:100','p2s5' => 'required|integer|min:60|max:100','p2s6' => 'required|integer|min:60|max:100',
			'p3s1' => 'required|integer|min:60|max:100','p3s2' => 'required|integer|min:60|max:100','p3s3' => 'required|integer|min:60|max:100','p3s4' => 'required|integer|min:60|max:100','p3s5' => 'required|integer|min:60|max:100','p3s6' => 'required|integer|min:60|max:100',
			'p4s1' => 'required|integer|min:60|max:100','p4s2' => 'required|integer|min:60|max:100','p4s3' => 'required|integer|min:60|max:100','p4s4' => 'required|integer|min:60|max:100','p4s5' => 'required|integer|min:60|max:100','p4s6' => 'required|integer|min:60|max:100',
			'p5s1' => 'required|integer|min:60|max:100','p5s2' => 'required|integer|min:60|max:100','p5s3' => 'required|integer|min:60|max:100','p5s4' => 'required|integer|min:60|max:100','p5s5' => 'required|integer|min:60|max:100','p5s6' => 'required|integer|min:60|max:100',
			'r1' => 'required|integer|min:1|max:10','r2' => 'required|integer|min:1|max:10','r3' => 'required|integer|min:1|max:10','r4' => 'required|integer|min:1|max:10','r5' => 'required|integer|min:1|max:10','r6' => 'required|integer|min:1|max:10'
		];
	}

	public function messages()
	{
		return [
			'required' => 'Nilai Rapor dan Rangking harus disi',
			'integer' => 'Nilai Rapor dan Rangking harus integer (angka bulat)',
			'min' => 'Nilai harus lebih besar dari 60',
			'r1.min' => 'Rangking harus diantara 1-10',
			'r2.min' => 'Rangking harus diantara 1-10',
			'r3.min' => 'Rangking harus diantara 1-10',
			'r4.min' => 'Rangking harus diantara 1-10',
			'r5.min' => 'Rangking harus diantara 1-10',
			'r6.min' => 'Rangking harus diantara 1-10',
			'r1.max' => 'Rangking harus di antara 1-10',
			'r2.max' => 'Rangking harus di antara 1-10',
			'r3.max' => 'Rangking harus di antara 1-10',
			'r4.max' => 'Rangking harus di antara 1-10',
			'r5.max' => 'Rangking harus di antara 1-10',
			'r6.max' => 'Rangking harus di antara 1-10',
			'max' => 'Nilai harus lebih kecil dari 100'
		];
	}

}
