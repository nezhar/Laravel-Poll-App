<?php

class ContactController extends BaseController
{
	public function show()
	{
		$data = array();
		return View::make('contact', $data);
	}

	public function send()
	{
		$validator = Validator::make(
			array(
				'email' => Input::get('email'),
				'content' => Input::get('content'),
			),
			array(
				'email' => 'required|email',
				'content' => 'required|min:8',
			)
		);

		if ($validator->fails())
		{
			return Redirect::route('contact')->withInput()->withErrors($validator);
		}
		return Redirect::route('contact_success');
	}

	public function success()
	{
		$data = array();
		return View::make('success', $data);
	}

}
