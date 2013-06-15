<?php

class Event_Controller extends Base_Controller {

	public function action_index($id = NULL)
	{
		if (is_null($id))
		{
			return View::make('event.list')
			->with('title', '')
			->with('desc', '');
		}
		else
		{
			return View::make('event.view')
			->with('id', $id)
			->with('title', '')
			->with('desc', '');
		}
	}
}