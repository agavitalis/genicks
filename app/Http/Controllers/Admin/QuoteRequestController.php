<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuoteRequestController extends Controller
{
    public function manage_requests()  {

        return view('admin.manage_quotes');
    }
}
