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
}
