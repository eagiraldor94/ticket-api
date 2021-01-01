<?php

namespace App\Http\Controllers;
use App\Http\Resources\TicketCollection;
use App\Models\Customer;
use App\Models\Ticket;
use App\Models\Event;
use Illuminate\Http\Request;

class TicketController extends Controller
{
	static public function read($document){
    	// checking if customer registered
		$customer = Customer::where('id_number',$document)->first();
    	if ($customer != null) {
    		return new TicketCollection($customer->tickets);
    	}else{
			return response()->json([
				'status_code' => 404,
				'message' => 'Not found'
			]);
    	}
    }
    static public function create(){
    	//try catch for invalid values
    	try {
            $customer = Customer::where('id_number',$_POST['id_number'])->first();
            if ($customer == null) {
                $customer = new Customer();
            }
    		$customer->name = $_POST['name'];
    		$customer->id_type = $_POST['id_type'];
    		$customer->id_number = $_POST['id_number'];
    		$customer->country = $_POST['country'];
    		$customer->country_code = $_POST['country_code'];
    		$customer->phone = $_POST['phone'];
    		$customer->email = $_POST['email'];
    		$customer->save();
    		//checking event exists
    		$event = Event::find($_POST['event_id']);
    		if ($event==null) {
    			throw new Exception('Bad event id');
    		}
    		$diff = $event->limit-$event->assistants;
    		//checking enough tickets
    		if ($_POST['amount']>$diff) {
				return response()->json([
					'status_code' => 410,
					'message' => 'Not enough tickets'
				]);
    		}else{
    			//updating event assistants
    			$event->assistants += $_POST['amount'];
    			$event->save();
	    		$ticket = new Ticket();
	    		$ticket->customer_id = $customer->id;
	    		$ticket->event_id = $_POST['event_id'];
	    		$ticket->amount = $_POST['amount'];
	    		$ticket->save();
				return response()->json([
					'status_code' => 201,
					'message' => 'Created'
				]);
    		}
    	} catch (Exception $e) {
			return response()->json([
				'status_code' => 400,
				'message' => 'Bad Request'
			]);
    	}

    }
}
