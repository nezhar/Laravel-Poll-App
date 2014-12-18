@extends('base')

@section('heading')
	<h1>{{{ Lang::get('contact.contact') }}}</h1>
@stop

@section('content')
	{{ Form::open(array('url' => route('contact'), 'method' => 'post')) }}
		{{ $errors->first('email') }}
		{{ Form::label('email', Lang::get('contact.label_email')) }}
		{{ Form::text('email') }}
		<br>
		{{ $errors->first('content') }}
		{{ Form::label('content', Lang::get('contact.label_content')) }}
		{{ Form::textarea('content') }}
		<br>
		<button type="submit">{{{ Lang::get('contact.send') }}}</button>
	{{ Form::close() }}
@stop