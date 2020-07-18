<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    
    public function add_product(Request $request)  {

        if($request->isMethod("GET")){

            return view('admin.add_product');
        }else{

            //upload the picture
            if ( $request->hasfile( 'product_picture' ) ) {

                $extension = $request->file( 'product_picture' )->getClientOriginalExtension();
                $new_name = round( microtime( true )* 234 ) . '.' .$extension;
                $request->file( 'product_picture' )->storeAs( 'public/products', $new_name );
                //get full path
                $picture_url = \App::make( 'url' )->to( '/' ).'/storage/products/'.$new_name;

                Product::create(['product_name'=> $request->product_name,'picture_url'=> $picture_url, 
                'status'=> $request->product_status,'description'=> $request->product_description]);

                return back()->with("success", "Product Upload Successful");

            }else{
                return back()->with("errors", "Please Select a Sample Picture Image");
            }
           
        }
    }

    public function manage_products(Request $request)  {

        $products = Product::paginate(20)->sortByDesc('created_at');
        return view('admin.manage_products',compact('products'));
    }
}
