<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\CartItem;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function getHome(){

      $cartItems = DB::table('carts')->where('uid', '=', Auth::id())->get();
      $counter = count($cartItems);

      session(['count'=>$counter]);

      return view('home');
	}
   	public function  getAbout()
   	{
   		return view('about');
   	}
   	public function  getContact()
   	{
   		return view('contact');
   	}
      public function  getShop()
      {
         return view('shop');
      }
      
}
