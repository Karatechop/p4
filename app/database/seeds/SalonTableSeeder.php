<?php

class SalonTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// Delete any content in the salons table
		DB::table('salons')->delete();
		
		$salons = array(
        	array(
			'name' => "Batman's Salon", 
        		'city' => "Gotham",
        		'address' => "Batman st. 1",
        		'open_h' => "08",
        		'open_m' => "00",
        		'close_h' => "21",
        		'close_m' => "30",
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "5862542",
        		'url' => "http//batman.com"),
        		
        	
        	array(
			'name' => "Batman's Salon NY", 
        		'city' => "New York",
        		'address' => "5th Ave. 120",
        		'open_h' => "08",
        		'open_m' => "30",
        		'close_h' => "21",
        		'close_m' => "00",
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "5632587",
        		'url' => "http//batman.com/ny"),
        		
        	
        	array(
        		'name' => "Superman's Salon", 
        		'city' => "Metropolis",
        		'address' => "Superman st. 1",
        		'open_h' => "08",
        		'open_m' => "00",
        		'close_h' => "20",
        		'close_m' => "00",
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "9615486",
        		'url' => "http//superman.com"),
        		
        	
        	array(
        		'name' => "Spiderman's Salon", 
        		'city' => "New York",
        		'address' => "Spiderman st. 1",
        		'open_h' => "07",
        		'open_m' => "30",
        		'close_h' => "22",
        		'close_m' => "30",
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3261485",
        		'url' => "http//spiderman.com"),
        		
        	
        	array(
			'name' => "Joker's Salon", 
        		'city' => "Gotham",
        		'address' => "Joker st. 1",
        		'open_h' => "06",
        		'open_m' => "00",
        		'close_h' => "23",
        		'close_m' => "00",
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "6952145",
        		'url' => "http//joker.com"),


        	array(
			'name' => "Robin's Salon", 
        		'city' => "Gotham", 
        		'address' => "Robin st. 5", 
        		'open_h' => "07", 
        		'open_m' => "00", 
        		'close_h' => "22", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "4587962", 
        		'url' => "http://robin.com"),



        	array(
			'name' => "Catwoman's Salon", 
        		'city' => "Gotham", 
        		'address' => "Catwoman st. 78", 
        		'open_h' => "07", 
        		'open_m' => "30", 
        		'close_h' => "22", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3258745", 
        		'url' => "http://catwoman.com"),



        	array(
			'name' => "Bane's Salon", 
        		'city' => "Gotham", 
        		'address' => "Bane st. 67", 
        		'open_h' => "06", 
        		'open_m' => "30", 
        		'close_h' => "21", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3258965", 
        		'url' => "http://bane.com"),



        	array(
			'name' => "Scarecrow's Salon", 
        		'city' => "Gotham", 
        		'address' => "Scarecrow st. 9", 
        		'open_h' => "06", 
        		'open_m' => "00", 
        		'close_h' => "20", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "9874521", 
        		'url' => "http://scarecrow.com"),



        	array(
			'name' => "Penguin's Salon", 
        		'city' => "Gotham", 
        		'address' => " Penguin st. 32", 
        		'open_h' => "09", 
        		'open_m' => "00", 
        		'close_h' => "23", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "6666587", 
        		'url' => "http://penguin.com"),



        	array(
			'name' => "Two-Face Salon", 
        		'city' => "Gotham", 
        		'address' => "Two-Face st. 155", 
        		'open_h' => "08", 
        		'open_m' => "30", 
        		'close_h' => "21", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3333987", 
        		'url' => "http://two-face.com"),



        	array(
			'name' => "Riddler's Salon", 
        		'city' => "Gotham", 
        		'address' => "Riddler st. 12", 
        		'open_h' => "08", 
        		'open_m' => "00", 
        		'close_h' => "20", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "4756698", 
        		'url' => "http://riddler.com"),



        	array(
			'name' => "Mr.Freeze's Salon", 
        		'city' => "Gotham", 
        		'address' => "Freeze st. 77", 
        		'open_h' => "08", 
        		'open_m' => "00", 
        		'close_h' => "21", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "1145228", 
        		'url' => "http://mr-freeze.com"),



        	array(
			'name' => "Poison Ivy's Salon", 
        		'city' => "Gotham", 
        		'address' => "Poison st. 98", 
        		'open_h' => "07", 
        		'open_m' => "00", 
        		'close_h' => "21", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "7893215", 
        		'url' => "http://poison-ivy.com"),



        	array(
			'name' => "Clark Kent's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Clark st. 34", 
        		'open_h' => "07", 
        		'open_m' => "00", 
        		'close_h' => "22", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3697415", 
        		'url' => "http://clark-kent.com"),



        	array(
			'name' => "Lana Lang's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Lana st. 149", 
        		'open_h' => "09", 
        		'open_m' => "00", 
        		'close_h' => "23", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "5588475", 
        		'url' => "http://lana-lang.com"),



        	array(
			'name' => "Pete Ross's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Pete st. 82", 
        		'open_h' => "06", 
        		'open_m' => "00", 
        		'close_h' => "20", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "6987332", 
        		'url' => "http://pete-ross.com"),



        	array(
			'name' => "Professor Hamilton's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Hamilton st. 47", 
        		'open_h' => "06", 
        		'open_m' => "30", 
        		'close_h' => "20", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3355774", 
        		'url' => "http://hamilton.com"),



        	array(
			'name' => "Krypto's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Krypto st. 52", 
        		'open_h' => "08", 
        		'open_m' => "30", 
        		'close_h' => "20", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3549622", 
        		'url' => "http://krypto.com"),



        	array(
			'name' => "Supergirls's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Supergirl st. 91", 
        		'open_h' => "08", 
        		'open_m' => "30", 
        		'close_h' => "20", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "9985476", 
        		'url' => "http://supergirl.com"),



        	array(
			'name' => "Lex Luthor's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Luthor st. 174", 
        		'open_h' => "09", 
        		'open_m' => "00", 
        		'close_h' => "23", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "5478625", 
        		'url' => "http://lex-luthor.com"),



        	array(
			'name' => "Lucy Lane's Salon", 
        		'city' => "Metropolis", 
        		'address' => "Lucy st. 84", 
        		'open_h' => "09", 
        		'open_m' => "00", 
        		'close_h' => "23", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "3366441", 
        		'url' => "http://lucy-lane.com"),



        	array(
			'name' => "Peter Parker's Salon", 
        		'city' => "New York", 
        		'address' => "Parker st. 95", 
        		'open_h' => "08", 
        		'open_m' => "30", 
        		'close_h' => "20", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "1158227", 
        		'url' => "http://peter-parker.com"),



        	array(
			'name' => "Mary Jane's Salon", 
        		'city' => "New York", 
        		'address' => "Mary Jane st. 69", 
        		'open_h' => "07", 
        		'open_m' => "30", 
        		'close_h' => "21", 
        		'close_m' => "30", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "7528945", 
        		'url' => "http://maryjane.com"),



        	array(
			'name' => "Green Goblin's Salon", 
        		'city' => "New York", 
        		'address' => "Goblin st. 142", 
        		'open_h' => "06", 
        		'open_m' => "00", 
        		'close_h' => "20", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "9832761", 
        		'url' => "http://goblin.com"),



        	array(
			'name' => "Dr.Octopus's Salon", 
        		'city' => "New York", 
        		'address' => "Octopus st. 189", 
        		'open_h' => "07", 
        		'open_m' => "00", 
        		'close_h' => "22", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "4562222", 
        		'url' => "http://octopus.com"),
        	array(
			'name' => "EditTest Salon", 
        		'city' => "TestTown", 
        		'address' => "Test st. 189", 
        		'open_h' => "07", 
        		'open_m' => "30", 
        		'close_h' => "21", 
        		'close_m' => "00", 
        		'int_code' => "00",
        		'coun_code' => "1",
        		'net_code' => "070",
        		'phone' => "4562222", 
        		'url' => "http://octopus.com")
        );
        
         DB::table('salons')->insert($salons);
        }

} //end
