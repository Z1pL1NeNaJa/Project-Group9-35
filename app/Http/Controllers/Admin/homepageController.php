<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Str;
use File;
use App\Homepage;

class homepageController extends Controller
{
    public function showhomepage()
    {
        $homepage = Homepage::all();
        return view('admin.adminindextotal.homepage.homepage', compact('homepage'));
    }
    public function showaddadmin()
    {
        return view('admin.addadmintotal.adddataadminh.adddataadminh');
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate(
            [
                'information' => 'required',
                'promotion' => 'required',
                'endpromotion' => 'required',
                'image' => 'file|mimes:jpeg,jpg,png,gif|max:12040',
            ],
            [
                'information.required' => 'กรุณาใส่ชื่อโปรโมชั่น',
                'promotion.required' => 'กรุณาใส่รายละเอียดโปรโมชั่น',
                'endpromotion.required' => 'กรุณาใส่วันหมดอายุโปรโมชั่น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        // dd($request);
        $homepage = new Homepage();
        $homepage->information = $request->information;
        $homepage->promotion = $request->promotion;
        $homepage->endpromotion = $request->endpromotion;
        $homepage->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $homepage->image = $filemane;
        } else {
            $homepage->image = 'icon2.png';
        }
        $homepage->save();
        return redirect()->route('homepagefrom');
    }
    public function edit($id)
    {
        $edithomepage = Homepage::find($id);
        return view('admin.Editadmintotal.editadminh.editadminh', compact('edithomepage'));
    }
    public function update(Request $request, $Homepage_id)
    {
        // dd($request);
        $validateDate = $request->validate(
            [
                'information' => 'required',
                'promotion' => 'required',
                'endpromotion' => 'required',
                'image' => 'file|mimes:jpeg,jpg,png,gif|max:12040',
            ],
            [
                'information.required' => 'กรุณาใส่ชื่อโปรโมชั่น',
                'promotion.required' => 'กรุณาใส่รายละเอียดโปรโมชั่น',
                'endpromotion.required' => 'กรุณาใส่วันหมดอายุโปรโมชั่น',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );

        if ($request->hasFile('image')) {
            $homepage = Homepage::find($Homepage_id);
            if ($homepage->image != 'icon2.png') {
                File::delete(public_path() . '/admin/images/' . $homepage->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $homepage->image = $filemane;
            $homepage->information = $request->information;
            $homepage->promotion = $request->promotion;
            $homepage->endpromotion = $request->endpromotion;
        } else {
            $homepage = Homepage::find($Homepage_id);
            $homepage->information = $request->information;
            $homepage->promotion = $request->promotion;
            $homepage->endpromotion = $request->endpromotion;
        }
        $homepage->save();
        return redirect()->route('homepagefrom');
    }
    public function delete($Homepage_id)
    {
        Homepage::destroy($Homepage_id);
        return redirect()->route('homepagefrom');
    }
}
