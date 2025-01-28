<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function form(Category $category = null): View
    {
        if ($category){
            $category = Category::find($category->getKey());
        }

        return \view('categories.form', ['category' => $category]);
    }
}
