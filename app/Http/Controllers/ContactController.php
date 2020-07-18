<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Exception;

class ContactController extends Controller
{
      /**
     * Show the application contact page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function contact(Request $request)
    {
        if($request->isMethod("GET")){

            return view('contact');

        }else{

            try{

                Contact::create(['name'=> $request->name,'email'=> $request->email, 
                'phone_number'=> $request->phone_number,'message_subject'=> $request->msg_subject,
                'message'=> $request->message]);

                return response()->json(array('success'));
                
            } catch (Exception $e) {

                return response()->json(array($e->getMessage()));
                
            }
            
        }
    }
}
