@extends('master')

@section('content')

<h1>Admin panel</h1>

@include ('adminpanel_services_navbar')

<div class="row">
        <div class="col-lg-6">
             
        @if(Session::get('flash_message'))
       	
        <div class="alert {{ Session::get('alert_class', 'alert-info') }}">
       	{{ Session::get('flash_message') }}
	<br>
	
	@if(isset($errors))
	@foreach($errors->all() as $message) 
	{{ $message }}
	@endforeach
	@endif
	
	</div>
	@endif
        
            <div class="panel panel-primary">
            	<div class="panel-heading">
            	   <h3 class="panel-title">Add a new service</h3>
  </div>
  <div class="panel-body">


<h5>Remember to add any new salons, service kinds and durations this new service might require before submitting this form</h5>

{{Former::horizontal_open()
  ->id('ServiceCreateForm')
  ->url('adminpanel/services/create')
  ->rules(array( 
  	  'kind_id' => 'required',
  	  'type' => 'required',
  	  'duration_id' => 'required',
  	  'part' => 'required',
  	  'descrition' => 'max:300',
  	  'salons[]' => 'required',
  	  ))
  ->method('POST') 
}}

{{Former::select('kind_id',"Select service kind")->options($kinds)
  ->class('col-lg-12')
  ->required();
}}

{{Former::select('type',"Select service type")->options(
		["turkish" => "turkish", 
		"finnish" => "finnish", 
		"russian banya" => "russian banya"])
  ->class('col-lg-12')
  ->required();
}}

{{Former::select('duration_id',"Select service duration")->options($durations)
  ->class('col-lg-12')
  ->required();
}}


<div class="control-group error required"><label for="price" class="control-label">Enter service price<sup>*</sup></label><div class="controls"><input required="true" min="0" max="1000" class="col-lg-12" id="price" type="number" step="0.01" name="price"></div></div>

{{Former::select('part',"Is this service part of a larger spa treatment? Select 1 for Yes, 0 for No")->options(
		["0" => "0", 
		"1" => "1" ])
  ->class('col-lg-12')
  ->required();
}}

{{
Former::textarea('description', "Describe this service. (max 300 characters)")
   ->class('col-lg-12')	
   ->state('error');
}}

@foreach($salons as $id => $salon)
{{ Form::checkbox('salons[]', $id); }} {{ $salon }}
@endforeach
<br>
<br>		

{{ Former::actions()
    ->large_primary_submit('Submit')
    ->large_inverse_reset('Reset')
}}


{{Former::close()}}
</div>

</div>

</div>

</div>


<br>
<br>



	
@stop
