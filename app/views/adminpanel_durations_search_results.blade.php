@extends('master')

@section('content')

@include ('adminpanel_durations_navbar')

<h1>Search results</h1>

@if($query)
		<h2>You searched for: {{{ $query }}}</h2>
	@endif

	@if(sizeof($duration_results) == 0)
		No results
	@else

{{ "<strong> Your results: </strong>" }} <br>

@foreach ($duration_results as $duration)

@include ('durations_table')

@endforeach

@endif

<br>
<br>

@stop