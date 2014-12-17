@extends('base')

@section('heading')
	<h1>{{{$poll->question}}}</h1>
@stop

@section('content')
	{{ Form::open(array('url' => route('poll_save', array('id' => $poll->id)))) }}

	@foreach ($poll->answers as $answer)
		<p>{{Form::radio('answer', $answer->id)}} {{{$answer->answer}}}</p>
	@endforeach

	{{ Form::submit(Lang::get('poll.save')) }}
	{{ Form::close() }}

	<hr>

	{{ link_to_route('polls', Lang::get('poll.back')) }}
@stop