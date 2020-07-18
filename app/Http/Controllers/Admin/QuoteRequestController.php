<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\QuoteRequest;

class QuoteRequestController extends Controller
{
    public function manage_requests(Request $request)  {

        if($request->isMethod("GET")){

            $quote_requests = QuoteRequest::paginate(20)->sortByDesc('created_at');
            return view('admin.manage_quote_requests',compact('quote_requests'));
        }
    }

}
