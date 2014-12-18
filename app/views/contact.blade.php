@extends('base')

@section('heading')
	<h1>Contact</h1>
@stop

@section('content')
	{{ Form::open(array('url' => route('contact'), 'method' => 'post')) }}
		{{ $errors->first('email') }}
		{{ Form::label('email', 'E-Mail Address') }}
		{{ Form::text('email') }}
		<br>
		{{ $errors->first('content') }}
		{{ Form::label('content', 'Content') }}
		{{ Form::textarea('content') }}
		<br>
		<button type="submit">Send</button>
	{{ Form::close() }}
@stop