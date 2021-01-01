<?php

namespace App\Http\Controllers;

use App\Http\Resources\Customer as CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
	static public function read($document){
    	// checking if customer registered
		$customer = Customer::where('id_number',$document)->first();
    	if ($customer != null) {
    		return new CustomerResource($customer);
    	}else{
			return response()->json([
				'status_code' => 404,
				'message' => 'Not found'
			]);
    	}
    }
}
