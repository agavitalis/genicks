<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use Exception;


class ContactController extends Controller
{
    public function manage_contacts(Request $request)  {

        if($request->isMethod("GET")){
            $contacts = Contact::paginate(20)->sortByDesc('created_at');
            return view('admin.manage_contacts',compact('contacts'));
        }
        else if ($request->isMethod("POST")) {

            try {
                Contact::where(['id' => $request->id])->update(['status' => $request->status]);
                return response()->json(array('success' => 'Status Updated to'+$request->status));

            } catch (Exception $e) {

                return response()->json(array($e->getmessage()));
            }
        }
    }

    public function delete_contact(Request $request)
    {

        if ($request->isMethod("POST")) {

            try {

                Contact::where(['id' => $request->id])->delete();
                return response()->json(array('success' => 'Contact Successfully deleted'));

            } catch (Exception $e) {

                return response()->json(array($e->getmessage()));
            }

        }
    }
}
