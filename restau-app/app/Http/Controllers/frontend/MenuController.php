<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index(){
        $categories = Category::all();
        $menus = Menu::all();
        return view('menu.index', compact('menus', 'categories'));
    }
}
