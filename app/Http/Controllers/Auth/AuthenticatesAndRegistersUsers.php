<?php namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use DB;
use Auth;

trait AuthenticatesAndRegistersUsers {

	/**
	 * The Guard implementation.
	 *
	 * @var \Illuminate\Contracts\Auth\Guard
	 */
	protected $auth;

	/**
	 * The registrar implementation.
	 *
	 * @var \Illuminate\Contracts\Auth\Registrar
	 */
	protected $registrar;

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	//public function getRegister()
	//{
	//	return view('auth.register');
	//}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{
		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			return redirect($this->registerPath())
						->withInput($request->only('username', 'email','full_name'))
            ->withErrors($validator);
				//$this->throwValidationException(
				//$request, $validator
				//);
		}
		$this->auth->login($this->registrar->create($request->all()));

		DB::table('applicants')->insert(array('user_id' => Auth::user()->id));
		DB::table('applicants')->where('user_id', Auth::user()->id)->update('full_name', $request->full_name);
		//DB::table('applicants')->insert(array('full_name' => $request->nama_lengkap));
		DB::table('families')->insert(array('user_id' => Auth::user()->id));
		DB::table('pesantrens')->insert(array('user_id' => Auth::user()->id));
		DB::table('schools')->insert(array('user_id' => Auth::user()->id));
		DB::table('raports')->insert(array('user_id' => Auth::user()->id));
		DB::table('applications')->insert(array('user_id' => Auth::user()->id));

		return redirect($this->redirectPath());
	}

	/**
	 * Show the application login form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogin()
	{
		return view('auth.login');
		//$this->loginPath();
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postLogin(Request $request)
	{
		$this->validate($request, [
			'username' => 'required', 'password' => 'required',
		]);

		$credentials = $request->only('username', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return redirect()->intended($this->redirectPath());
		}

		return redirect($this->loginPath())
					->withInput($request->only('username', 'remember'))
					->withErrors([
						'email_login' => $this->getFailedLoginMessage(),
					]);
	}

	/**
	 * Handle a login request to the application.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postLoginadmin(Request $request)
	{
		$this->validate($request, [
			'username' => 'required', 'password' => 'required',
		]);

		$credentials = $request->only('username', 'password');

		if ($this->auth->attempt($credentials, $request->has('remember')))
		{
			return redirect()->intended($this->adminPath());
		}

		return redirect($this->adminPath())
					->withInput($request->only('username', 'remember'))
					->withErrors([
						'email_login' => $this->getFailedLoginMessage(),
					]);
	}

	/**
	 * Get the failed login message.
	 *
	 * @return string
	 */
	protected function getFailedLoginMessage()
	{
		return 'Username atau Password anda salah.';
	}

	/**
	 * Log the user out of the application.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getLogout()
	{
		$this->auth->logout();

		return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
	}

	/**
	 * Get the post register / login redirect path.
	 *
	 * @return string
	 */
	public function redirectPath()
	{
		if (property_exists($this, 'redirectPath'))
		{
			return $this->redirectPath;
		}

		return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
	}

	/**
	 * Get the path to the login route.
	 *
	 * @return string
	 */
	public function loginPath()
	{
		return property_exists($this, 'loginPath') ? $this->loginPath : '/#login';
	}

	/**
	 * Get the path to the login route.
	 *
	 * @return string
	 */
	public function registerPath()
	{
		return property_exists($this, 'registerPath') ? $this->registerPath : '/#daftar';
	}

	/**
	 * Get the path to the login route.
	 *
	 * @return string
	 */
	public function adminPath()
	{
		return property_exists($this, 'adminPath') ? $this->adminPath : '/admin';
	}

}
