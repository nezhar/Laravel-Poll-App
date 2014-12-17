@extends('base')

@section('heading')
	<h1>{{{ Lang::get('poll.list_of_polls') }}}</h1>
@stop

@section('content')
	<ul>
		@foreach ($polls as $poll)
			<li><a href="{{{ route('poll_detail', array( 'id' => $poll->id, )) }}}">{{{$poll->question}}}</a></li>
		@endforeach
	</ul>
@stop