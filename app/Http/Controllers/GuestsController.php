<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guests;

class GuestsController extends Controller
{
    public function index(){
    	return json_decode (Guests::all());
    }

    public function guset_id($id){
    	
    	if (Guests::where('id', '=', $id)->count() > 0){
    		return json_decode (Guests::where('id', '=', $id)->get());
    	}else return 'No data';
    }

    public function guset_put(Request $request){
    	
    	if (Guests::where('email', '=', $request->input('email'))->count() > 0){
    		return json_decode (Guests::where('id', '=', $request->input('email'))->get());
    	}else return 'No data';
    }

    public function destroy($id){
    	DB::delete('delete from guests where id = ?', $id);
    	return 'Complete!.';
    }
}
