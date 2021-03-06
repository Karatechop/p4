<div class="navbar navbar-default">
  
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  
  <div class="navbar-collapse collapse navbar-responsive-collapse">
    
    <ul class="nav navbar-nav">
    <li><a href="/">Home</a></li>
    <li><a href="/">Learn more</a></li>
    <li><a href="/">Help</a></li>
    </ul>
    
    	{{ Form::open(array('class'=> 'navbar-form navbar-left', 'url' => '/services/search', 'method' => 'GET')) }}
		
		{{ Form::text('query', '', array('class'=>'form-control col-lg-8', 'placeholder'=>'Look for services')) }} 

		{{ Form::submit('Search', array('class'=> 'form-control col-lg-8')); }} 
	
	{{ Form::close() }}
   
    @if(Auth::check())
    <ul class="nav navbar-nav navbar-right">
    <li><a href="/logout">Log out</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
    <li><a href="/adminpanel">Admin panel</a></li>
    </ul>
    
    @else
      <ul class="nav navbar-nav navbar-right">
      <li><a href="/login">Admin log in</a></li>
    @endif
  
    
    
  </div>
  
</div>
