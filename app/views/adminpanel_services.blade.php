@extends('master')

@section('content')

<h1>Admin panel</h1>

@include ('adminpanel_services_navbar')


@if(Session::get('flash_message'))
       	
        <div class="alert {{ Session::get('alert_class', 'alert-info') }}">
       	{{ Session::get('flash_message') }}
	</div>
@endif

@if (isset($service))
{{print_r($service)}}
@endif

<h2>Services</h2>

<a href="/adminpanel/services/create" class="btn btn-primary">Add a new service</a>

<h3>All services data:</h3>

@foreach ($salon_names as $key=> $value)
{{ "<strong>".$value." services: </strong>" }} <br>
@foreach ($services as $service)

@foreach ($service->salon as $salon)

@if ($salon->name == $value)

@include ('services_table')<br><br>

@endif

@endforeach

@endforeach

@endforeach

@stop
