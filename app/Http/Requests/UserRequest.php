<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request {

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
			'username' => 'required|max:30|alpha|unique:users',
			'email' => 'required|email|unique:users',
			'password' => 'required|confirmed|min:8'
		];
	}

	public function messages()
	{
		return [
			'username.required' => 'Username harus diisi',
			'username.unique' 	=> 'Username telah digunakan pengguna lain',
			'email.required' => 'Username harus diisi',
			'email.email' => 'Gunakan E-mail yang valid',
			'email.unique' => 'Email ini sudah digunakan',
			'password.required' => 'Password tidak boleh kosong',
			'password.confirmed' => 'Password yang anda masukan tidak sama',
			'password.min' => 'Password minimal depalan (8) huruf',
		];
	}

}
