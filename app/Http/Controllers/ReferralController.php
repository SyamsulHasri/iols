<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class ReferralController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index($refer_id)
    {
        if (User::where('user_id', $refer_id)->exists()) {
            $id = true;
         }else{
            $id = false;
         }
         
        return view('welcome', [
            'refer_id' => $refer_id,
            'id' => $id
      ]);
    } 

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function contact($refer_id)
    {
        if (User::where('user_id', $refer_id)->exists()) {
            $id = true;
         }else{
            $id = false;
         }
         
        return view('contact.contact', [
            'refer_id' => $refer_id,
            'id' => $id
      ]);
    } 

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function buckthron($refer_id)
    {
        if (User::where('user_id', $refer_id)->exists()) {
            $id = true;
         }else{
            $id = false;
         }
         
        return view('product.buckthronoil', [
            'refer_id' => $refer_id,
            'id' => $id
      ]);
    } 

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function flskincare($refer_id)
    {
        if (User::where('user_id', $refer_id)->exists()) {
            $id = true;
         }else{
            $id = false;
         }
         
        return view('product.flskincare', [
            'refer_id' => $refer_id,
            'id' => $id
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function shop($refer_id)
    {
        if (User::where('user_id', $refer_id)->exists()) {
            $id = true;
         }else{
            $id = false;
         }
         
        return view('shop.shop', [
            'refer_id' => $refer_id,
            'id' => $id
      ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart($refer_id)
    {
        if (User::where('user_id', $refer_id)->exists()) {
            $id = true;
         }else{
            $id = false;
         }
         
        return view('shop.cart', [
            'refer_id' => $refer_id,
            'id' => $id
      ]);
    }

}
