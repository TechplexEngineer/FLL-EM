<?php

class User_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	|
	*/

	public function action_index()
	{
		return View::make('user.index')
		->with('title', '')
		->with('desc', '');
	}

	public function action_login()
	{
		return View::make('user.login')
		->with('title', 'Sign in &middot; '.Config::get('app.name'))
		->with('desc', 'User Login Page');
	}

	public function action_volunteer()
	{
		return View::make('user.volunteer')
		->with('title', 'Volunteer for a tournament &middot; '.Config::get('app.name'))
		->with('desc', 'Volunteer registration page');
	}

}