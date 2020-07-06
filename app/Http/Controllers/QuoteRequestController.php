<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuoteRequest;

class QuoteRequestController extends Controller
{
    
    /**
     * Show the application quite request page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function quote(Request $request)
    {
        if($request->isMethod("GET")){
            return view('quote');

        }else{

            try{

                QuoteRequest::create(['name'=> $request->name,'email'=> $request->email, 
                'phone_number'=> $request->phone_number,'message_subject'=> $request->msg_subject,
                'message'=> $request->message]);
                
                return response()->json(array('success'));
            } catch (Exception $e) {

                return back()->with('errors', $e);
            }
            
        }
    }
}
