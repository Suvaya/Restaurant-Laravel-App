<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Table;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('frontend.category.index', compact('categories'));
    }

    public function show(Category $category, Table $tables){
        return view('frontend.category.show', compact('category', 'tables'));
    }
}
