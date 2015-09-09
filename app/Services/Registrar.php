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
			'username' => 'required|max:255|min:5',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:8',
		], [
			'username.required' => 'Username tidak boleh kosong.',
			'username.min' => 'Username minimal lima (5) karakter.',
			'username.max' => 'Username maksimal 255 karakter.',
			'email.required' => 'Alamat email tidak boleh kosong.',
			'email.email' => 'Alamat email harus valid.',
			'email.unique' => 'Alamat email ini sudah digunakan.',
			'password.required' => 'Password tidak boleh kosong',
			'password.confirmed' => 'Password tidak match',
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
