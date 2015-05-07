<?php

class LoginController extends BaseController{

			//get route
		public function login()
		{
			return View::make('login');
		}

		public function doLogin()
		{

			// $validator = Validator::make(Input::all(), User::$rules);

			$password = Input::get('password');
			$email = Input::get('email');

			if (Auth::attempt(array('email' => $email, 'password' => $password))) {

				Session::flash('successMessage', 'You have succesfully logged in.');

			    return Redirect::intended('/');
			} else {

				Session::flash('errorMessage', 'Login failed. Please try again.');
			    // login failed, go back to the login screen
			    return Redirect::back();
			}
		}

		public function logout()
		{
			Auth::logout();
			return Redirect::to('/');
		}


}
