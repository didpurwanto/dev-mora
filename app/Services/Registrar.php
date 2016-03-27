<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'username' => 'required|max:20|min:3|unique_with:users,email',
			'full_name' => 'required|max:100|min:5',
			'email' => 'required|email|max:100|unique:users',
			'password' => 'required|confirmed|min:8',
			'jenis_school' => 'required|not_in:0',
			'nspp' => 'numeric|required|exists:pesantrens,nspp',

		], [
			'username.required' => 'Username tidak boleh kosong.',
			'username.min' => 'Username minimal 3 karakter.',
			'username.max' => 'Username maksimal 20 karakter.',
			// 'unique_with' => 'Data-data yang anda masukan cairo_image_surface_get_data(surface)h terdaftar. Silahkan klik lupa password pada saat login, jika anda sudah pernah mendaftar.',
			'unique_with' => 'Username dan email sudah terdaftar',
			// 'email.unique' => 'Username ini sudah digunakan.',
			'full_name.required' => 'Nama Lengkap tidak boleh kosong',
			'full_name.unique' => 'Nama Lengkap ini sudah digunakan.',
			'full_name.min' => 'Nama Lengkap minimal 5 karakter.',
			'full_name.max' => 'Nama Lengkap maksimal 100 karakter.',
			'email.required' => 'Alamat email tidak boleh kosong.',
			'email.email' => 'Alamat email harus valid.',
			// 'email.unique' => 'Alamat email ini sudah digunakan.',
			'password.required' => 'Password tidak boleh kosong',
			'password.confirmed' => 'Password tidak sesuai',
			'password.min' => 'Password minimal delapan (8) karakter',
			'jenis_school.required' => 'Jenis Pesantren harus dipilih',
			'jenis_school.not_in' => 'Jenis Pesantren harus dipilih',
			'nspp.required' => 'NSPP harus diisi',
			'nspp.exists' => 'NSPP belum terdaftar',
			'nspp.numeric' => 'NSPP harus berupa angka'
			]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'username' => $data['username'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
			'role' => '1',
		]);
	}

}
