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
			'p1s1' => 'required','p1s2' => 'required','p1s3' => 'required','p1s4' => 'required','p1s5' => 'required','p1s6' => 'required',
			'p2s1' => 'required','p2s2' => 'required','p2s3' => 'required','p2s4' => 'required','p2s5' => 'required','p2s6' => 'required',
			'p3s1' => 'required','p3s2' => 'required','p3s3' => 'required','p3s4' => 'required','p3s5' => 'required','p3s6' => 'required',
			'p4s1' => 'required','p4s2' => 'required','p4s3' => 'required','p4s4' => 'required','p4s5' => 'required','p4s6' => 'required',
			'p5s1' => 'required','p5s2' => 'required','p5s3' => 'required','p5s4' => 'required','p5s5' => 'required','p5s6' => 'required',
			'r1' => 'required','r2' => 'required','r3' => 'required','r4' => 'required','r5' => 'required','r6' => 'required'
		];
	}
	
	public function messages()
	{
		return [
			'required' => 'Semua Nilai dan Ranking harus di risi dengan benar',
		];
	}

}
