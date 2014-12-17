<h1>{{{$poll->question}}}</h1>

	@foreach ($poll->answers as $answer)
		<p>{{{$answer->answer}}} ({{{$answer->votes}}})</p>
	@endforeach

<hr>

<a href="/polls">Poll Home</a>