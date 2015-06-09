<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class SchoolRequest extends Request {

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
			'school_name' => 'required',
			'school_principal_name' => 'required',
			'nisn' => 'required',
			'school_status' => 'required',
			'graduate_year' => 'required',
			'school_type_id' => 'required',
			'program_study_id' => 'required',
			'inside_pondok' => 'required',
			'school_address' => 'required',
			'province_id' => 'required',
			'kabupaten_id' => 'required',
			'kecamatan_id' => 'required'
		];
	}

	public function messages()
	{
		return [
			'school_name.required' => 'Nama Sekolah tidak boleh kosong',
			'school_principal_name.required' => 'Nama Kepala Sekolah tidak boleh kosong',
			'nisn.required' => 'NISN tidak boleh kosong',
			'school_status.required' => 'Status Sekolah tidak boleh kosong',
			'graduate_year.required' => 'Tahun Lulus tidak boleh kosong',
			'school_type_id.required' => 'Jenis Sekolah tidak boleh kosong',
			'program_study_id.required' => 'Jenis Program Studi tidak boleh kosong',
			'inside_pondok.required' => 'Lokasi Sekolah tidak boleh kosong',
			'school_address.required' => 'Alamat Sekolah tidak boleh kosong'
		];
	}
}
