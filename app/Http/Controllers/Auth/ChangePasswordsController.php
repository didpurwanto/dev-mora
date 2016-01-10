<?php namespace App\Http\Controllers\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;
use Hash;

class ChangePasswordsController extends Controller {

  public function __construct()
  {
    $this->middleware('admin');
  }

	public function edit() {
        return view('admin/changepassword');
  }

  public function update(){
    $validator = \Validator::make(\Input::all(),array(
			'Password_Saat_Ini'	=> 'required|min:6',
      'Password' 		=> 'required|min:6',
			'Konfirmasi_Password'=> 'required|same:Password'
		));

  	if($validator->fails()) {
  		return redirect()->back()->withErrors($validator);
  	} else {
      // Grab the current user
  		$user 			= User::find(Auth::user()->id);

  		// Get passwords from the user's input
  		$old_password 	= \Input::get('Password_Saat_Ini');
  		$password 		= \Input::get('Password');

  		// test input password against the existing one
  		if(Hash::check($old_password, $user->getAuthPassword())){
  			$user->password = Hash::make($password);

  			// save the new password
  			if($user->save()) {
  				return redirect('/admin')
  						->with('pesan', 'Password anda berhasil diganti.');
  			}
  		} else {
  			return redirect()->back()
  				->with('pesan', 'Password saat ini tidak sesuai.');
  		}
  	}

  }
}
