<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\User;

class ShopController extends Controller
{
    /**
    * Write code on Method
    *
    * @return response()
    */
   public function addToCart($id)
   {
        if(Auth::check()){

            $user = User::where('user_id',Auth()->user()->user_id)->first();
            $product = Product::findOrFail($id);
            $price = Product::findOrFail($id)->price()->where('price_level' , $user->member_type)->first();

            $cart = session()->get('cart', []);
        
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $price->price,
                    "image" => $product->image
                ];
            }
                
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produk berjaya ditambahkan ke troli!');

        }else{
            $product = Product::findOrFail($id);
            $price = Product::findOrFail($id)->price()->where('price_level' , 'RETAIL PRICE')->first();
     
            $cart = session()->get('cart', []);
       
            if(isset($cart[$id])) {
                $cart[$id]['quantity']++;
            } else {
                $cart[$id] = [
                    "name" => $product->name,
                    "quantity" => 1,
                    "price" => $price->price,
                    "image" => $product->image
                ];
            }
               
            session()->put('cart', $cart);
            return redirect()->back()->with('success', 'Produk berjaya ditambahkan ke troli!');
            
        }
   
   }
  
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function update(Request $request)
   {
       if($request->id && $request->quantity){
           $cart = session()->get('cart');
           $cart[$request->id]["quantity"] = $request->quantity;
           session()->put('cart', $cart);
           session()->flash('success', 'Troli berjaya dikemas kini');
       }
   }
  
   /**
    * Write code on Method
    *
    * @return response()
    */
   public function remove(Request $request)
   {
       if($request->id) {
           $cart = session()->get('cart');
           if(isset($cart[$request->id])) {
               unset($cart[$request->id]);
               session()->put('cart', $cart);
           }
           session()->flash('success', 'Product removed successfully');
       }
   }
}
