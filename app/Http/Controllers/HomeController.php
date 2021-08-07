<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\CartItem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


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
        $cartItems = DB::table('carts')->where('uid', '=', Auth::id())->get();
        $counter = count($cartItems);

        session(['count'=>$counter]);

        return view('home');
    }
}
