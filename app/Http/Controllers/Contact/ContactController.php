<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Contact(Request $request){
 
    	if($request->isMethod('post')){

    		$data = $request->all();

            //dd($data);

            //Validation
            $request->validate([
	            'title' => 'required',
            	'phone'  => 'required|numeric|digits:10',
            	'email'  =>'required',
            	 'file' => 'required',
            	
	         ]);


           return view('contact.contactview',compact('data'));
    	}

     return view('contact.contact');
    }
}
