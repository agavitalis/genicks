<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application index page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the application about page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function about()
    {
        return view('about');
    }

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

                return back()->with('errors', $e);
            }
            
        }
    }

    /**
     * Show the application pricing page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function pricing()
    {
        return view('pricing');
    }

    /**
     * Show the application services page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function services()
    {
        return view('services');
    }

    /**
     * Show the application products page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function products()
    {
        return view('products');
    }

      /**
     * Show the application faq page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function faq()
    {
        return view('faq');
    }

    /**
     * Show the application terms_and_conditions page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function terms_and_conditions()
    {
        return view('terms_and_conditions');
    }

    /**
     * Show the application privacy page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function privacy_policy()
    {
        return view('privacy_policy');
    }

    /**
     * Show the application privacy page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function return_policy()
    {
        return view('return_policy');
    }
}
