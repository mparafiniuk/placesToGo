<?php

class AuthController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		Return View::make('login.login');
	}

	/**
	 * Process the login form
	 *
	 * @return Response
	 */
	public function doLogin()
	{
		$userdata = Input::only('login', 'password');

		if(Auth::attempt($userdata)) {
			return Redirect::route('places.index');
		}
		else {
			return Redirect::back()->withInput();
		}
	}
}
