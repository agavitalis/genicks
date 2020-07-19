<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Exception;

class QuoteRequestController extends Controller
{
    public function manage_requests(Request $request)
    {

        if ($request->isMethod("GET")) {

            $quote_requests = QuoteRequest::paginate(20)->sortByDesc('created_at');
            return view('admin.manage_quote_requests', compact('quote_requests'));

        } else if ($request->isMethod("POST")) {
            try {
                QuoteRequest::where(['id' => $request->id])->update(['status' => $request->status]);
                return response()->json(array('success' => 'Status Updated to'+$request->status));

            } catch (Exception $e) {

                return response()->json(array($e->getmessage()));
            }
        }
    }
    

    public function delete_request(Request $request)
    {

        if ($request->isMethod("POST")) {

            try {

                QuoteRequest::where(['id' => $request->id])->delete();
                return response()->json(array('success' => 'Quote Request Successfully deleted'));

            } catch (Exception $e) {

                return response()->json(array($e->getmessage()));
            }

        }
    }

}
