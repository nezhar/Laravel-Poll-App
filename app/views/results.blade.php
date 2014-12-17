@extends('base')

@section('heading')
	<h1>{{{$poll->question}}}</h1>
@stop

@section('content')
	@foreach ($poll->answers as $answer)
		<p>{{{$answer->answer}}} ({{{$answer->votes}}})</p>
	@endforeach

	<hr>

	{{ link_to_route('polls', Lang::get('poll.to_poll')) }}
@stop