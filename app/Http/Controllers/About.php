<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class About extends Controller
{
    public function showproduct(Request $request)
    {
        $product = Product::when($request->type, function($query) use($request){
            return $query->where('category_id', $request->type);
        })->get();

        $categories = Category::all();

        $type = "";

        if($request->type){
            $type = $request->type;
        }

        return view('about',compact('product', 'categories', 'type'));
    }
}
