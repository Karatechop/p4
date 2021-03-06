<?php


class SalonController extends BaseController
{
	
public function __construct() {
		
		parent::__construct();
		$this->beforeFilter('auth');
	}

	
	public function adminPanelSalons()
    {
    	   # Show salons search form and all salons by city to admin.
    	   $salons = Salon::showAllsalons();
    	   $salon_cities = Salon::citiesSalons();
    	   $salon_names = Salon::namesSalons();
    	   return View::make('adminpanel_salons')->with('salons', $salons)
    	   					 ->with('salon_cities', $salon_cities)
    	   					 ->with('salon_names', $salon_names);
    }
	
	public function adminPanelSearchSalonResults()
    {
    	   {
        # Show salons search results to admin.
        $query  = Input::get('query');
        $salon_results = Salon::searchSalonResults($query);
        
        return View::make('adminpanel_salons_search_results')
        ->with('salon_results', $salon_results)
        ->with('query', $query);
	    }
	}
	
	 public function getAdminPanelCreateSalon()
    {
    	   # Show the create new salon form.  	   	
    	return View::make('adminpanel_create_salon');
    }
    
    
    
    public function postAdminPanelCreateSalon()
    {
        # Handle create new salon form submission.
        # Validation
        
        $rules = array(
        	'name' => 'required|unique:salons|max:20',
        	'city' => 'required|max:20',                
        	'address' => 'required|max:50',
        	'open_h' => 'required|between:0,24',              
        	'open_m' => 'required|between:0,59',
        	'close_h' => 'required|between:0,24',
        	'close_m' => 'required|between:0,59',
        	'int_code' => 'required|between:0,59',
        	'coun_code' => 'required|between:0,59',
        	'net_code' => 'required|between:0,59',
        	'phone' => 'required|numeric|max:99999999999',
        	'url' => 'required|url'
        	);          

	$validator = Validator::make(Input::all(), $rules);

		if($validator->fails()) {
		
		Session::put('alert_class', 'alert-danger');
		
		return Redirect::to('/adminpanel/salons/create')
		->with('flash_message', 'Could not add - please fix the errors listed below.')
		->withInput()
		->withErrors($validator);
		};
		
	# Instantiate the salon model
		
		$salon = new Salon;
		 
		$salon->name = ucwords (Input::get('name'));              
		$salon->city = Input::get('city');
		$salon->address = Input::get('address');
		$salon->open_h = Input::get('open_h');
		$salon->open_m = Input::get('open_m');
		$salon->close_h = Input::get('close_h');
		$salon->close_m = Input::get('close_m');         
		$salon->int_code = Input::get('int_code');
		$salon->coun_code = Input::get('coun_code');
		$salon->net_code = Input::get('net_code');
		$salon->phone = Input::get('phone');
		$salon->url = Input::get('url');
		$salon->save();
		$salon->save();
				
		Session::put('alert_class', 'alert-success');
		
		return Redirect::to('/adminpanel/salons/create')
    		->with('flash_message','New salon has been added.');
    }
    
    
    public function getAdminPanelEditSalon($id)  
    {
    	     # Show the edit salon form.
    	                
    	     try {
			$salon = Salon::findOrFail($id);
		}
		
		catch(Exception $e) {
			return Redirect::to('/adminpanel/salons')
			->with('flash_message', 'Salon not found');
    	     }
    	  
    	     return View::make('adminpanel_edit_salon')->with('salon', $salon);            
     
    } 
    
    
    
    public function postAdminPanelEditSalon($id) {
    	                    
    		try {
			$salon = Salon::findOrFail($id);
		}
		
		catch(Exception $e) {
			
			Session::put('alert_class', 'alert-danger');
			
			return Redirect::to('/adminpanel/salons')->with('flash_message', 'Salon not found');
		}
		
		
		
			$rules = array(
				'name' => 'required|max:20',
				'city' => 'required|max:20',                
				'address' => 'required|max:50',
				'open_h' => 'required|between:0,24',              
				'open_m' => 'required|between:0,59',
				'close_h' => 'required|between:0,24',
				'close_m' => 'required|between:0,59',
				'int_code' => 'required|between:0,59',
				'coun_code' => 'required|between:0,59',
				'net_code' => 'required|between:0,59',
				'phone' => 'required|numeric|max:99999999999',
				'url' => 'required|url'
				); 
        	    
			$validator = Validator::make(Input::all(), $rules);
			
				if($validator->fails()) {
			
					Session::put('alert_class', 'alert-danger');
				
					return Redirect::to('/adminpanel/salons/edit/'.$salon->id)
					->with('flash_message', 'An error occured while editing this salon. Please try again.')
					->withInput()
					->withErrors($validator);
				};
		
		# Save updates data to DB
    	     
			$salon->name = ucwords (Input::get('name'));                 
			$salon->city = Input::get('city');
			$salon->address = Input::get('address');
			$salon->open_h = Input::get('open_h');
			$salon->open_m = Input::get('open_m');
			$salon->close_h = Input::get('close_h');
			$salon->close_m = Input::get('close_m');         
			$salon->int_code = Input::get('int_code');
			$salon->coun_code = Input::get('coun_code');
			$salon->net_code = Input::get('net_code');
			$salon->phone = Input::get('phone');
			$salon->url = Input::get('url');
			$salon->save();
			
			Session::put('alert_class', 'alert-success');
			
			return Redirect::to('/adminpanel/salons')
			->with('flash_message', 'Your edit has been successfully saved'); 
			
    		}
		    
   

    		
    public function getAdminPanelDeleteSalon($id)  
    {
    	     # Show the delete salon confirmation form.
    	                
    	     try {
			$salon = Salon::findOrFail($id);
		}
		catch(Exception $e) {
			
			Session::put('alert_class', 'alert-danger');
			return Redirect::to('/adminpanel/salons')->with('flash_message', 'Salon not found');
    	     }

    	     
    	     return View::make('adminpanel_delete_salon')
    	     ->with('salon', $salon);
   }
   
   
   public function postAdminPanelDeleteSalon($id) 
   {
		try {
	        
			$salon = Salon::findOrFail($id);
		}
		catch(Exception $e) {
			
			Session::put('alert_class', 'alert-danger');
			return Redirect::to('/adminpanel/salons')->with('flash_message', 'Salon not found');
			}
	 
		try {
			Salon::destroy($id);
		    
			Session::put('alert_class', 'alert-info');
			return Redirect::to('/adminpanel/salons')->with('flash_message', 'Salon successfully deleted.');
		}
		
		catch(Exception $e) {
			
			# In case of constraint violation display all related services that block deletion.
			
			Session::put('alert_class', 'alert-danger');
			Session::flash('flash_message', 'Could not delete - integrity constraint violation. 
				This salon is related to at least one service in database. 
				In order to delete this salon first delete all services listed below.'); 
			$query  = $salon->name;
			$service_results = Service::searchServiceResults($query); 
			
			return View::make('adminpanel_services_search_results')	
			 ->with('service_results', $service_results)
			 ->with('query', $query);
				
			
			
		}

   }
   
} //end
