<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        
        return view('category')->with('categories',$categories);
    }
    public function create()
    {
        
        $category = new Category;
        $category->name = "sally";
        $category->save();
        $categories = Category::get();
        return view('category',compact('categories'));
    }
}
