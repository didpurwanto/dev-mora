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
			'full_name' => 'required|max:100|min:5|unique:applicants',
			'email' => 'required|email|max:100',
			'password' => 'required|confirmed|min:8',
		], [
			'username.required' => 'Username tidak boleh kosong.',
			'unique_with' => 'Data-data yang anda masukan sudah terdaftar. Silahkan klik lupa password pada saat login, jika anda sudah pernah mendaftar.',
			//'email.unique' => 'Username ini sudah digunakan.',
			'username.min' => 'Username minimal 3 karakter.',
			'username.max' => 'Username maksimal 20 karakter.',
			'full_name.required' => 'Nama Lengkap tidak boleh kosong',
			//'full_name.unique' => 'Nama Lengkap ini sudah digunakan.',
			'full_name.min' => 'Nama Lengkap minimal 5 karakter.',
			'full_name.max' => 'Nama Lengkap maksimal 100 karakter.',
			'email.required' => 'Alamat email tidak boleh kosong.',
			'email.email' => 'Alamat email harus valid.',
			//'email.unique' => 'Alamat email ini sudah digunakan.',
			'password.required' => 'Password tidak boleh kosong',
			'password.confirmed' => 'Password tidak sesuai',
			'password.min' => 'Password minimal delapan (8) karakter',
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
