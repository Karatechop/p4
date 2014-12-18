<?php

class Duration extends Eloquent {
	
	protected $fillable = array('duration');
	
	
	/**
	* Identify relation between Duration and Service
	*/
	public function service() {
        # Duration has many Service
        # Define a one-to-many relationship.
        return $this->hasMany('Service');
        }
        
        
       	public function scopeDurationsDescending($query)
	{
	# show desc list of all service durations to admin. 
        return $query->orderBy('duration','DESC');
        }

          
        public static function searchDurationResults($query) {
	
		# In case of query, search for service durations with that query
        if($query) {
            
            $durations = Duration::where('duration', 'LIKE', "%$query%")->get();
        }
        
        # Else show all durations
        else {
            
           $durations = Duration::all();
        }
        return $durations;
        
     }

     public static function getIdNamePair() {
     	     # Generate a key=>value pair of duration id => duration duration for dropdowns
		$durations = Array();
		$all_durations = Duration::all();
		foreach($all_durations as $duration) {
			$durations[$duration->id] = $duration->duration;
		}
		$durations = $durations;
		return $durations;
	}

     
}
    