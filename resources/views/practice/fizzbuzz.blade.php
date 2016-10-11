@extends('layouts.master')

@section('content')
	<div class="container">
		<div class="row">
			@for($i = 1; $i <= 100; $i++)
				@if($i % 15 == 0)
					<p>FizzBuzz</p>
				@elseif($i % 3 == 0)
					<p>Fizz</p>
				@elseif($i % 5 == 0)
					<p>Buzz</p>
				@else
					<p>{{ $i }}</p>
				@endif
			@endfor
		</div>
	</div>
@stop