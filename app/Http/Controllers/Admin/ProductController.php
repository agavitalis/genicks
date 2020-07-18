<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function add_product(Request $request)  {

        if($request->isMethod("GET")){

            return view('admin.add_product');
        }else{
            
            dd($request);
        }
    }

    public function manage_products(Request $request)  {

        return view('admin.manage_products');
    }
}
