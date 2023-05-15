<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{
    public function index(){
        $categories = Category::all();
        $menus = Menu::all();
        return view('frontend.menu.index', compact('menus', 'categories'));
    }

    public function addcart(Request $request, $id){
        if(Auth::id()){
            $user_id = Auth::id();
            $menuid = $id;
            $quantity = $request->quantity;

            $cart = new cart;
            $cart->user_id=$user_id;
            $cart->menu_id=$menuid;
            $cart->quantity=$quantity;
            $cart->save();

            return redirect()->back();
        }
        else{
            return redirect('/login');
        }
    }
}
