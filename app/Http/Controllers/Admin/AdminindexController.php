<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class AdminindexController extends Controller
{
    public function showadmin()
    {
        $users = User::all();
        return view('admin.adminindextotal.adminindex.admin', compact('users'));
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.Editadmintotal.editadmin.editadmin', compact('users'));
    }
    public function showaddadmin()
    {
        return view('admin.addadmintotal.adddataadmin.adddataadmin');
    }
    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'name' => 'required|max:255',
                'email' => 'required',
                'address' => 'required',
                'isAdmin' => 'required',
                'phone' => 'required',
            ],
            [
                'email.required' => 'กรุณาป้อนEmail',
                'address.required' => 'กรุณาป้อนที่อยู่',
                'phone.required' => 'กรุณาป้อนเบอร์โทรศัพท์',
                'isAdmin.required' => 'กำหนดแอดมิน',
                'name.required' => 'กรุณาป้อนชื่อแอดมินก่อน',
                'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
            ]
        );
        $users = User::find($id);
        $users->name = $request->name;
        $users->email = $request->email;
        $users->address = $request->address;
        $users->isAdmin = $request->isAdmin;
        $users->phone = $request->phone;



        $users->save();
        return redirect('adminfrom');
    }
    // public function delete($id)
    // {
    //     User::destroy($id);
    //     return redirect('adminfrom');
    // }
}
