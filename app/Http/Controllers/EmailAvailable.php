<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmailAvailable extends Controller
{
   	public function index()
   	{
   		return view('admin.verify.email_available');
   	}

   	public function check(Request $request)
   	{
   		if($request->get('email')){
   			$email = $request->get('email');
   			$data  = DB::table('users')
   					->where('email', $email)
   					->count();
   			if($data > 0){
   				echo '1';
   			}
   			else{
   				echo '0';
   			}
   		}
   	}
}
