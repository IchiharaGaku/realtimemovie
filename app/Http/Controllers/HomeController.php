<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function myCart() {
        $my_carts = Cart::all();
        return view('mycart', compact('my_carts'));
    }
    // public function addMycart(Request $request)
    // {
    //     $user_id = Auth::id();
    //     $stock_id = $request->stock_id;

    //     $cart_add_info=Cart::firstOrCreate(['stock_id' => $stock_id, 'user_id' => $user_id]);

    //     if($cart_add_info->wasRecentlyCreated){
    //         $message = 'カートに追加しました';
    //     } else {
    //         $message = 'カートに登録済みです';
    //     }

    //     $my_carts = Cart::where('user_id', $user_id)->get();
    //     return view('mycart', compact('my_carts', 'message'));
    // }
}

