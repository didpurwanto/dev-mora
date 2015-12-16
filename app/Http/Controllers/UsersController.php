<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Auth;

// use Illuminate\Http\Request;
use Request;

class UsersController extends Controller {


	public function __construct()
	{
		//$this->middleware('auth');
		$this->middleware('admin');
	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$users = User::all();
		$users = User::whereRaw('role = 255 OR role = 100 OR role = 200')->get();

		return view('user.user', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('user.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(UserRequest $request)
	{
		//$input = Request::all();
		//$input['role'] =1;

		//User::create($input);

		// return $input;

    //dd($request->all());
		User::create([
			'username' => $request['username'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
			'role' => $request['role'],
		]);

		//\Session::flash('flash_text','Pengguna berhasil dibuat!');
		return redirect('admin/users');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = User::findOrFail($id);
		return view('user.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, UserUpdateRequest $request)
	{
		$user = User::findOrFail($id);
		$user->update($request->all());
		return redirect('admin/users');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);

		return redirect('admin/users');
	}

}
