@extends('master')

@section('content')

<h1>Admin panel</h1>

@include ('adminpanel_kinds_navbar')

<div class="row">
        <div class="col-lg-12">
             
@include ('flash_message')
        
	<div class="panel panel-danger">
	<div class="panel-heading">
		<h3 class="panel-title">Delete this service kind</h3>
	</div>
	<div class="panel-body">

	<p>Are you sure you would like to delete this service kind?</p>
	
<table id="dataTable" class="tablesorter table table-striped table-hover"> 
<thead> 
<tr>  
    <th>Service type</th> 
    <th>Created at</th>
    <th>Deleted at</th>
</tr> 
</thead> 
<tbody>
	
@include ('kinds_table')	

</tbody>
</table>

<br>

{{Form::open(array('url' => '/adminpanel/kinds/delete'.$kind->id, 'method' => 'DELETE'))}}
    {{Form::submit("Permanently delete this service kind", array('class' => 'btn btn-danger'))}}
{{Form::close()}}

	
	</div>
	
	</div>
	
	
	</div>

</div> 


<br>
<br>



	
@stop
