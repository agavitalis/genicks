<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Product;
use App\Models\QuoteRequest;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $contactus_count = Contact::count();
        $quote_count = QuoteRequest::count();
        $product_count = Product::count();
      
        return view('admin.dashboard',compact('contactus_count','quote_count','product_count'));
    }
}
