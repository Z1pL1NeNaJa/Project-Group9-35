<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use Illuminate\Support\Str;
use Image;
use File;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware("VerifyIsCategory")->only(['showproduct','create']);
    }
    public function showproduct(){

        $product = Product::all();
        return view('admin.adminindextotal.product.productfrom',compact('product'));
    }
    public function showaddadminp()
    {
        return view('admin.addadmintotal.adddataadminp.adddataadminp')->with('categories',Category::all());
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'image'=>'mimes:jpeg,jpg,png,gif|file|max:12040',
        ],
        [
            'name.required'=> 'กรุณาป้อนชื่อสินค้า',
            'description.required'=> 'กรุณาป้อนรายละเอียดสินค้า',
            'category.required'=> 'กรุณาป้อนประเภทสินค้า',
            'price.required'=> 'กรุณาป้อนราคาสินค้า',
            'price.numeric'=> 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes'=> 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
            'image.file'=> 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max'=> 'อัพโหลดได้ไม่เกิน 10 MB',
        ]
    );
        //dd($request);
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->category_id = $request->category;

        if($request->hasFile('image')){
            $filemane =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filemane);
            Image::make(public_path().'/admin/images/'.$filemane);
            $product->image = $filemane;
        }else{
            $product->image = 'icon2.png';
        }
        $product->save();
        return redirect()->route('productfrom');
    }
    public function edit($id){
        $editproduct = Product::find($id);
        return view('admin.Editadmintotal.editadminp.editadminp',compact('editproduct'))->with('categories',Category::all());
    }
    public function update(Request $request, $id_product){
        //dd($request);
        $validateDate = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'category'=>'required',
            'price'=>'required|numeric',
            'image'=>'mimes:jpeg,jpg,png,gif|file|max:12040',
        ],
        [
            'name.required'=> 'กรุณาป้อนชื่อสินค้า',
            'description.required'=> 'กรุณาป้อนรายละเอียดสินค้า',
            'category.required'=> 'กรุณาป้อนประเภทสินค้า',
            'price.required'=> 'กรุณาป้อนราคาสินค้า',
            'price.numeric'=> 'ป้อนได้เฉพาะตัวเลขเท่านั้น',
            'image.mimes'=> 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
            'image.file'=> 'อัพโหลดได้เฉพาะไฟล์ภาพ',
            'image.max'=> 'อัพโหลดได้ไม่เกิน 10 MB',
        ]
    );

        if($request->hasFile('image')){
            $product = Product::find($id_product);
            if($product->image != 'icon2.png'){
                File::delete(public_path().'/admin/images/'.$product->image);
            }
            $filemane =  Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filemane);
            Image::make(public_path().'/admin/images/'.$filemane);
            $product->image = $filemane;
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->category_id = $request->category;
        }else{
            $product = Product::find($id_product);
            $product->name = $request->name;
            $product->description = $request->description;
            $product->price = $request->price;
            $product->category_id = $request->category;

        }
        $product->save();
        return redirect()->route('productfrom');
    }
    public function delete($id_product){
        Product::destroy($id_product);
        return redirect('/productfrom');
    }
}
