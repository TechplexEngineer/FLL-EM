<?php

class Home_Controller extends Base_Controller {

	/*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "home", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/home/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index()
	{
		return View::make('home.index')
		->with('title', 'Maine FIRST Lego League Event Manager')
		->with('desc', 'A tool to help cordinators of Maine FIRST events run the competitions.');
	}

	public function action_about()
	{
		return View::make('home.about')
		->with('title', 'About the FLL EM')
		->with('desc', 'The FLL EM .... Gibberish here');
	}

	public function action_contact()
	{
		return View::make('home.contact')
		->with('title', 'How can we help you?')
		->with('desc', 'Contact the event orginizers');
	}

}