<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth, Hash, App\Models\User;

class AuthController extends Controller
{
	public function login (Request $request){
		//Function to get bearer token for user
		try {
			$request->validate([
				'email' => 'email|required',
				'password' => 'required'
			]);
			
			$credentials = request(['email','password']);
			// checking if user exists
			if (!Auth::attempt($credentials)) {
				
				return response()->json([
					'status_code' => 401,
					'message' => 'Unauthorized'
				]);
			}

			$user = User::where('email', $request->email)->first();
			//check if credentials match
			if (!Hash::check($request->password, $user->password, [])) {
				throw new \Exception('Error in Login');
			}
			//generating and sending Bearer token
			$tokenResult = $user->createToken('authToken')->plainTextToken;
			return response()->json([
		      'status_code' => 200,
		      'access_token' => $tokenResult,
		      'token_type' => 'Bearer',
		    ]);
		} catch (Exception $e) {
			
		    return response()->json([
		      'status_code' => 401,
		      'message' => 'Error in Login',
		      'error' => $error,
		    ]);
		}
	}
}
