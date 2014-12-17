<h1>{{{$poll->question}}}</h1>


{{ Form::open() }}

	@foreach ($poll->answers as $answer)
		<p>{{Form::radio('answer', $answer->id)}} {{{$answer->answer}}}</p>
	@endforeach

{{ Form::submit('Save') }}
{{ Form::close() }}

<hr>

<a href="/polls">Back</a>