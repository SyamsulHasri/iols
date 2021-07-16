<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use Hash;
use Carbon\Carbon;
use App\Models\User;
use App\Models\UserAddress;
use App\Models\BankDetail;
use App\Models\Ewallet;
use App\Models\ReferralLink;
use App\Models\Product;

class AuthController extends Controller
{
   /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('auth.login');
    }  
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration($refer_id)
    {
        $member = User::where('user_id',$refer_id)->first();
        // return view('auth.register');
        return view('auth.register', [
            'member' => $member->member_type,
            'refer_id' => $refer_id,
      ]);
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('system/dashboard')
                        ->withSuccess('Selamat Datang '. Auth::user()->name);
        }
  
        return redirect("login")->withSuccess('Amaran! Anda telah memasukkan maklumat yang tidak sah');
    }
      
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request, $refer_id)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone_no' => 'required|min:10',
            'password' => 'required|confirmed|min:6',

            'address1' => 'required',
            'city' => 'required',
            'postcode' => 'required|digits:5',
            'state' => 'required',

            'bank_name' => 'required',
            'bank_no' => 'required',
       ]);


        $timestamp = Carbon::now()->timestamp;
        $referrer = User::where('user_id',$refer_id)->first();
        $user_id = 'IOLS-00' . $referrer->id+1 . '-'. $timestamp;

       $user = new User();
       $user->user_id = $user_id;
       $user->sponsor_id = $refer_id;
       $user->leader_id = $referrer->leader_id;
       $user->level = $referrer->level+1;
       $user->member_type = $request->member_type;
       $user->name = $request->name;
       $user->email = $request->email;
       $user->phone_no = $request->phone_no;
       $user->password =  Hash::make($request->password);
       $user->register_date = Carbon::now();
       $user->user_status = 0;
       $user->first_purchase_amount ='0.00';
       $user->save();

       $address = new UserAddress();
       $address->user_id = $user_id;
       $address->address1 = $request->address1;
       $address->address2 = $request->address2;
       $address->city = $request->city;
       $address->postcode = $request->postcode;
       $address->state = $request->state;
       $address->country = $request->country;
       $address->save();

       $bank = new BankDetail();
       $bank->user_id = $user_id;
       $bank->bank_name = $request->bank_name;
       $bank->bank_no = $request->bank_no;
       $bank->save();

       $bank = new Ewallet();
       $bank->user_id = $user_id;
       $bank->amount = 0.00;
       $bank->save();

       $bank = new ReferralLink();
       $bank->user_id = $user_id;
       $bank->referral_link = 'www.iols.com.my/referral/'. $user_id;
       $bank->save();

       auth()->login($user);
         
        return redirect()->route('system.index')->withSuccess('Great! You have Successfully loggedin');
    }
    
    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // public function dashboard()
    // {
    //     if(Auth::check()){
    //         return view('dashboard.dashboard');
    //     }
  
    //     return redirect("login")->withSuccess('Opps! You do not have access');
    // }

    
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }
}
