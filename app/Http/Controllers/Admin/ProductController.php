<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function Index(){
        return view("admin.allproduct");
    }

    public function AddProduct(){
        $categories = Category::latest()->get();
        return view("admin.addproduct");
    }
}
