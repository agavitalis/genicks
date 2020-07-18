<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function manage_contacts(Request $request)  {

        if($request->isMethod("GET")){
            $contacts = Contact::paginate(20)->sortByDesc('created_at');
            return view('admin.manage_contacts',compact('contacts'));
        }
    }
}
