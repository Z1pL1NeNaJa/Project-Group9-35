<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contents;
use Illuminate\Support\Facades\Auth;
use Image;
use Illuminate\Support\Str;
use File;

class contentsController extends Controller
{
    public function showcontents()
    {
        $contents = Contents::all();
        return view('admin.adminindextotal.contents.contents', compact('contents'));
    }
    public function showaddadmin()
    {
        return view('admin.addadmintotal.adddataadminc.adddataadminc');
    }
    public function create(Request $request)
    {
        $validateDate = $request->validate(
            [
                'description' => 'required',
                'image' => 'file|mimes:jpeg,jpg,png,gif|max:12040',
            ],
            [
                'description.required' => 'กรุณาใส่รายละเอียดของภาพ',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );
        // dd($request);
        $contents = new Contents();
        $contents->name = $request->name;
        $contents->description = $request->description;
        $contents->user_id = Auth::user()->id;
        if ($request->hasFile('image')) {
            $filemane =  Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $contents->image = $filemane;
        } else {
            $contents->image = 'icon2.png';
        }
        $contents->save();
        return redirect()->route('contentsfrom');
    }
    public function edit($id)
    {
        $editcontents = contents::find($id);
        return view('admin.Editadmintotal.editadminc.editadminc', compact('editcontents'));
    }
    public function update(Request $request, $contents_id)
    {
        //dd($request);
        $validateDate = $request->validate(
            [
                'description' => 'required',
                'image' => 'file|mimes:jpeg,jpg,png,gif|max:12040',
            ],
            [
                'description.required' => 'กรุณาใส่รายละเอียดของภาพ',
                'image.mimes' => 'กรุณาอัพโหลดภาพนามสกุล jpeg,jpg,png,gif เท่านั้น',
                'image.file' => 'อัพโหลดได้เฉพาะไฟล์ภาพ',
                'image.max' => 'อัพโหลดได้ไม่เกิน 10 MB',
            ]
        );

        if ($request->hasFile('image')) {
            $contents = contents::find($contents_id);
            if ($contents->image != 'icon2.png') {
                File::delete(public_path() . '/admin/images/' . $contents->image);
            }
            $filemane = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/images/', $filemane);
            Image::make(public_path() . '/admin/images/' . $filemane);
            $contents->image = $filemane;
            $contents->description = $request->description;
            $contents->name = $request->name;
        } else {
            $contents = contents::find($contents_id);
            $contents->description = $request->description;
            $contents->name = $request->name;
        }
        $contents->save();
        return redirect()->route('contentsfrom');
    }
    public function delete($contents_id)
    {
        contents::destroy($contents_id);
        return redirect()->route('contentsfrom');
    }
}
