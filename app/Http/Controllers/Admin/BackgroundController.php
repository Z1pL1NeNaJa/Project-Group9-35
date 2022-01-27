<?php

namespace App\Http\Controllers\Admin;

use App\background;
use App\Http\Controllers\Controller;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Image;

class BackgroundController extends Controller
{
    public function showBackground()
    {
        $background = background::all();
        return view('admin.adminindextotal.Background.Background', compact('background'));
    }
    public function showaddadminb()
    {
        return view('admin.addadmintotal.adddataadminb.adddataadminb');
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate(
            [
                'name' => 'required',
                'image' => 'file|mimes:jpeg,jpg,png,gif|max:12040',
            ],
            [
                'name.required' => 'ที่อยู่พื้นหลัง',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        //dd($request);
        $background = new background();
        $background->name = $request->name;
        $background->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $background->image = $filemane;
        } else {
            $background->image = 'icon2.png';
        }
        $background->save();
        return redirect()->route('Backgroundfrom');
    }
    public function edit($id)
    {
        $editbackground = background::find($id);
        return view('admin.Editadmintotal.editadminb.editadminb', compact('editbackground'));
    }
    public function update(Request $request, $background_id)
    {
        //dd($request);
        $validateDate = $request->validate(
            [
                'name' => 'required',
                'image' => 'mimes:jpeg,jpg,png,gif|file|max:12040',
            ],
            [
                'name.required' => 'กรุณาป้อนชื่อสินค้า',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );

        if ($request->hasFile('image')) {
            $background = background::find($background_id);
            if ($background->image != 'icon2.png') {
                File::delete(public_path() . '/admin/images/' . $background->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $background->image = $filemane;
            $background->name = $request->name;
        } else {
            $background = background::find($background_id);
            $background->name = $request->name;
        }
        $background->save();
        return redirect()->route('Backgroundfrom');
    }
    public function delete($background_id)
    {
        background::destroy($background_id);
        return redirect('Backgroundfrom');
    }
}
