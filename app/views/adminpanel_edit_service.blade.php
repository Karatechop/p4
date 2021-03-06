@extends('master')

@section('content')

<h1>Admin panel</h1>

@include ('adminpanel_services_navbar')

<div class="row">
        <div class="col-lg-6">
             
@include ('flash_message')
        
	<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Edit this service</h3>
	</div>
	<div class="panel-body">


<h5>Genaral details</h5>

{{Former::horizontal_open()
  ->id('ServiceEditForm')
  ->url('adminpanel/services/edit/$service->id')
  ->rules(array( 
  	  'kind_id' => 'required',
  	  'type_id' => 'required',
  	  'duration' => 'required|numeric|between:0,1440',
  	  'part' => 'required',
  	  'descrition' => 'max:300',
  	  'salon_id' => 'required',
  	  ))
  ->method('POST') 
}}

{{Former::populate($service)}}

{{Former::select('kind_id',"Select service kind")->options($kinds)
  ->class('col-lg-12')
  ->required();
}}

{{Former::select('type_id',"Select service type")->options($types)
  ->class('col-lg-12')
  ->required();
}}

{{Former::number('duration',"Enter service duration in minutes")
  ->class('col-lg-12')
  ->required();
}}


<div class="control-group error required"><label for="price" class="control-label">Enter service price<sup>*</sup></label><div class="controls"><input required="true" min="0" max="1000" class="col-lg-12" id="price" type="number" step="0.01" name="price" value = "{{$price}}"></div></div>

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

{{Former::select('salon_id',"Select salon that provides this service")->options($salons)
  ->class('col-lg-12')
  ->required();
}}
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
