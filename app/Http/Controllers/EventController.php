<?php

namespace App\Http\Controllers;
use App\Http\Resources\EventCollection;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    static public function read($id=null){
    	// checking if specific id
    	if ($id!=null) {
    		$event = Event::where('id',$id)->get();
    		//check if register exists or empty collection
    		if (count($event)!=0) {
    			return new EventCollection($event);
    		}else{
    			return response()->json([
					'status_code' => 404,
					'message' => 'Not found'
				]);
    		}
    	}else{
    		return new EventCollection(Event::all());
    	}
    }
}
