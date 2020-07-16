<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function add_product()  {

        return view('admin.add_product');
    }

    public function manage_products()  {

        return view('admin.manage_products');
    }
}
