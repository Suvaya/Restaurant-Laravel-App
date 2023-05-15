<?php

namespace App\View\Components;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;
use Illuminate\View\View;

class GuestLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        $user_id = Auth::id();
        $count = Cart::where('user_id', $user_id)->count();
        return view('layouts.guest', compact('count'));
    }
}
