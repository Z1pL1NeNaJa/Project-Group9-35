<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use App\product;
use App\category;

class AdminController extends Controller
{
    public function index()
    {
        $users = user::all();
        $product = product::all();
        $category = category::all();
        return view('admin.index', compact('users', 'product', 'category',));
    }
}
