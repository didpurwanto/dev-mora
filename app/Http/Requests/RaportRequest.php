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
			'p1s1' => 'required|integer|min:0|max:100','p1s2' => 'required|integer|min:0|max:100','p1s3' => 'required|integer|min:0|max:100','p1s4' => 'required|integer|min:0|max:100','p1s5' => 'required|integer|min:0|max:100','p1s6' => 'required|integer|min:0|max:100',
			'p2s1' => 'required|integer|min:0|max:100','p2s2' => 'required|integer|min:0|max:100','p2s3' => 'required|integer|min:0|max:100','p2s4' => 'required|integer|min:0|max:100','p2s5' => 'required|integer|min:0|max:100','p2s6' => 'required|integer|min:0|max:100',
			'p3s1' => 'required|integer|min:0|max:100','p3s2' => 'required|integer|min:0|max:100','p3s3' => 'required|integer|min:0|max:100','p3s4' => 'required|integer|min:0|max:100','p3s5' => 'required|integer|min:0|max:100','p3s6' => 'required|integer|min:0|max:100',
			'p4s1' => 'required|integer|min:0|max:100','p4s2' => 'required|integer|min:0|max:100','p4s3' => 'required|integer|min:0|max:100','p4s4' => 'required|integer|min:0|max:100','p4s5' => 'required|integer|min:0|max:100','p4s6' => 'required|integer|min:0|max:100',
			'p5s1' => 'required|integer|min:0|max:100','p5s2' => 'required|integer|min:0|max:100','p5s3' => 'required|integer|min:0|max:100','p5s4' => 'required|integer|min:0|max:100','p5s5' => 'required|integer|min:0|max:100','p5s6' => 'required|integer|min:0|max:100',
			'r1' => 'required|integer|min:1|max:50','r2' => 'required|integer|min:1|max:50','r3' => 'required|integer|min:1|max:50','r4' => 'required|integer|min:1|max:50','r5' => 'required|integer|min:1|max:50','r6' => 'required|integer|min:1|max:50'
		];
	}

	public function messages()
	{
		return [
			'required' => 'Nilai Rapor dan Rangking harus disi',
			'integer' => 'Nilai Rapor dan Rangking harus berbentuk angka',
			'min' => 'Nilai harus lebih besar dari 0',
			'r1.min' => 'Nilai ranking tidak valid',
			'r2.min' => 'Nilai ranking tidak valid',
			'r3.min' => 'Nilai ranking tidak valid',
			'r4.min' => 'Nilai ranking tidak valid',
			'r5.min' => 'Nilai ranking tidak valid',
			'r6.min' => 'Nilai ranking tidak valid',
			'r1.max' => 'Nilai ranking tidak valid',
			'r2.max' => 'Nilai ranking tidak valid',
			'r3.max' => 'Nilai ranking tidak valid',
			'r4.max' => 'Nilai ranking tidak valid',
			'r5.max' => 'Nilai ranking tidak valid',
			'r6.max' => 'Nilai ranking tidak valid',
			'max' => 'Nilai harus lebih kecil dari 100'
		];
	}

}
