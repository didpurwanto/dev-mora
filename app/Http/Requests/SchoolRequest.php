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
			'graduate_year' => 'required|numeric|min:2010|max:2016',
			'school_type_id' => 'required',
			'program_study_id' => 'required',
			'inside_pondok' => 'required',
			'school_address' => 'required',
			'no_telp' => 'required|numeric',
			'province_id' => 'required',
			'kabupaten' => 'required',
			'kecamatan' => 'required',
			'kelurahan' => 'required'
			//'kabupaten_id' => 'required',
			//'kecamatan_id' => 'required'
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
			'graduate_year.numeric' => 'Tahun Lulus harus berupa angka',
			'graduate_year.min' => 'Tahun Lulus harus diatas 1998',
			'graduate_year.max' => 'Tahun Lulus harus dibawah 2017',
			'school_type_id.required' => 'Jenis Sekolah tidak boleh kosong',
			'program_study_id.required' => 'Jenis Program Studi tidak boleh kosong',
			'inside_pondok.required' => 'Lokasi Sekolah tidak boleh kosong',
			'school_address.required' => 'Alamat Sekolah tidak boleh kosong',
			'no_telp.required' => 'Nomor Telepon Sekolah tidak boleh kosong',
			'no_telp.numeric' => 'Nomor Telepon Sekolah harus angka',
			'kabupaten.required' => 'Nama Kabupaten tidak boleh kosong',
			'kecamatan.required' => 'Nama Kecamatan tidak boleh kosong',
			'kelurahan.required' => 'Nama Kelurahan tidak boleh kosong'
		];
	}
}
