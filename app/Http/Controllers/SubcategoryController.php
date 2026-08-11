<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    public function index($slug){
        return view('subcategory.index', compact('slug'));
    }
}
