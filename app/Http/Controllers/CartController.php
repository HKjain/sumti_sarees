<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cart;
use App\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
	
   public function index(){

      if(Auth::check()){

         $cartItems = DB::table('carts')->where('uid', '=', Auth::id())->get();
         $counter = count($cartItems);

         $customItems = DB::select('select products.category, products.image,carts.quantity,products.price*carts.quantity as total from products inner join carts where products.id = carts.pid and carts.uid = ?', [Auth::id()->get()]);



      return view('cart')->with("count", $counter)->with("cartItems", $cartItems)->with("customItems", $customItems);         
      }
      else{
         return redirect('/');
      }

   }


   public function addItem($id){

      DB::table('carts')->updateOrInsert(
        ['pid' => $id, 'uid' => Auth::id()->get() ],
        ['quantity' => 3]
    );

     return redirect('cart');
   }


}