<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return Redirect::route('polls');
});


Route::get(Lang::get('urls.polls'),
	array(
		'as'=>'polls',
		'uses' =>'PollsController@loadPolls'
	)
);

Route::get(Lang::get('urls.poll_detail'),
	array(
		'as' => 'poll_detail',
		'uses' => 'PollsController@showPoll',
	)
);
Route::post(Lang::get('urls.poll_save'),
	array(
		'as' => 'poll_save',
		'uses' => 'PollsController@saveAnswer',
	)
);

Route::get(Lang::get('urls.poll_results'),
	array(
		'as' => 'results',
		'uses' => 'PollsController@showResults',
	)
);