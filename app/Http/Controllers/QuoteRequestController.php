<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuoteRequest;
use Exception;

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
                'phone_number'=> $request->phone_number,'service'=> $request->service,
                'description'=> $request->description]);
                
                return response()->json(array('success'));
                
            } catch (Exception $e) {

                return response()->json(array($e->getmessage()));
            }
            
        }
    }
}
