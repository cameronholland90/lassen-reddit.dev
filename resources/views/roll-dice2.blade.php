@extends('layouts.master')

@section('top-script')
	<title>Roll Dice</title>
@stop

@section('content')
	<h1>Roll Dice Game</h1>
	<p>Dice Roll: {{ $dice_roll }}</p>
	<p>Guess: {{ $guess }}</p>
	<p>{{ $correct ? 'You guessed correctly' : 'You guessed wrong' }}</p>

	@if(condition)
		// html
	@elseif(condition)
		// html
	@else
		// html
	@endif

	@for($i = 0; $i <= 5; $i++)
	@endfor

	@foreach($things as $thing)
		// html
	@endforeach
@stop