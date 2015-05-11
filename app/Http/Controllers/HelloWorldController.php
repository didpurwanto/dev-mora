<?php

namespace App\Http\Controllers;

class HelloWorldController extends Controller {

// The middleware(‘guest’); means that any one can access this controller

public function __construct()
{
	$this->middleware(‘guest’);
}

public function index()
{
	return view(‘helloworld’);
}

}

