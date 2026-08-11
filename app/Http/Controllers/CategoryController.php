<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index($slug, $id){
        return view('category.index', compact('slug', 'id'));
    }
}
