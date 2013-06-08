<?php

class Config_Controller extends Base_Controller {

	public function action_index()
	{
		return View::make('config.index')
		->with('title', '')
		->with('desc', '')
		->with('author', '');
	}

	public function action_customize()
	{
		return View::make('config.customize')
		->with('title', '')
		->with('desc', '')
		->with('author', '');
	}

	public function action_login()
	{
		return View::make('home.login')
		->with('title', 'Sign in &middot; '.Config::get('app.name'))
		->with('desc', '')
		->with('author', '');
	}

}