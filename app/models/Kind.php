<?php

class Kind extends Eloquent {
	
	protected $fillable = array('name');

	
	/**
	* Identify relation between Kind and Service
	*/
	public function service() {
        # Kind has many Service
        # Define a one-to-many relationship.
        return $this->hasMany('Service');
    }
    	
    	public function scopeKindsAscending($query)
	{
	# show asc list of all service kinds to admin. 
        return $query->orderBy('name','ASC');
    }

        
        public static function searchKindResults($query) {
	
		# In case of query, search for service kinds with that query
        if($query) {
            
            $kinds = Kind::where('name', 'LIKE', "%$query%")->get();
        }
        
        # Else show all kinds
        else {
            
           $kinds = Kind::all();
        }
        return $kinds;
        
    }
    
         public static function getIdNamePair() {
     	     # Generate a key=>value pair of kind id => kind name for dropdowns
		$kinds = Array();
		$all_kinds = Kind::all();
		foreach($all_kinds as $kind) {
			$kinds[$kind->id] = $kind->name;
		}
		return $kinds;
	}
} //end
