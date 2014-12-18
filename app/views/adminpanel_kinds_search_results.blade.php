@extends('master')

@section('content')

@include ('adminpanel_kinds_navbar')

<h1>Search results</h1>

@if($query)
		<h2>You searched for: {{{ $query }}}</h2>
	@endif

	@if(sizeof($kind_results) == 0)
		No results
	@else

{{ "<strong> Your results: </strong>" }} <br>

@foreach ($kind_results as $kind)

@include ('kinds_table')

@endforeach

@endif

<br>
<br>

@stop