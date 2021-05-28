<?php

use Illuminate\Database\Seeder;
use App\Guests;

class GuestsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);

        for ($i=0; $i <= random_int(10, 30) ; $i++) { 
        	$length = random_int(20, 30);
        	$guest = new Guests;
        	for ($j = 0; $j < $length; $j++) {
		        $guest->firstname .= $characters[rand(0, $charactersLength - 1)];
		    }

        	 for ($k = 0; $k < $length; $k++) {
		        $guest->lastname .= $characters[rand(0, $charactersLength - 1)];
		    }
        	
        	for ($l = 0; $l < $length; $l++) {
		        $guest->email .= $characters[rand(0, $charactersLength - 1)];
		    }
		    $guest->email .= '@gmail.com';
        	$guest->save();
        }
    }
}
