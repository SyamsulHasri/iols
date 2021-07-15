<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Helpers\Helper;
use Hash;
use Carbon\Carbon;

use App\Models\User;
use App\Models\UserAddress;
use App\Models\BankDetail;
use App\Models\Ewallet;
use App\Models\ReferralLink;
use App\Models\Product;

class SystemController extends Controller
{

    /**
    * Write code on Method
    *
    * @return response()
    */
   public function index()
   {
        if(Auth::check()){
          //   return view('dashboard.dashboard');
               return view('dashboard.dashboard', [
               'user' => User::find(Auth()->user()->id),
         ]);
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
   }

     /**
    * Write code on Method
    *
    * @return response()
    */
    public function adminview()
    {
         return view('dashboard.registration.admin', [
               'admins' => User::where('member_type', 'Admin')->get(),
         ]);
    }

     /**
    * Write code on Method
    *
    * @return response()
    */
    public function adminregister()
    {
          return view('dashboard.registration.admin-registration', [
               
          ]);
    }
    
     /**
    * Write code on Method
    *
    * @return response()
    */
    public function admincreate(Request $request)
    {
          $request->validate([
               'name' => 'required',
               'email' => 'required|email|unique:users',
               'phone_no' => 'required|min:10',
               'password' => 'required|confirmed|min:6',
          ]);

          $data = User::where('member_type', 'Admin')->orderBy('id', 'desc')->first();
          if(!$data){
              $user_id = 'ADMN-001';
          }else{
               $user_id = 'ADMN-00'.$data->id+1;
          }

          $user = new User();
          $user->user_id = $user_id;
          $user->sponsor_id = 'Admin';
          $user->leader_id = 'Admin';
          $user->level = 'Admin';
          $user->member_type = 'Admin';
          $user->name = $request->name;
          $user->email = $request->email;
          $user->phone_no = $request->phone_no;
          $user->password =  Hash::make($request->password);
          $user->register_date = Carbon::now();
          $user->user_status = 1;
          $user->activation_date = Carbon::now();
          $user->first_purchase_amount ='0.00';
          $user->save();

          return redirect()->route("admin.view")->with('success', 'Proses Penambahan Pentadbir Berjaya');
    }

     /**
    * Write code on Method
    *
    * @return response()
    */
    public function distributorview()
    {
         return view('dashboard.registration.distributor', [
               'distributors' => User::where('member_type', 'Distributors')->get(),
         ]);
    }

     /**
    * Write code on Method
    *
    * @return response()
    */
    public function distributorregister()
    {
          return view('dashboard.registration.distributor-registration', [
               
          ]);
    }
    
     /**
    * Write code on Method
    *
    * @return response()
    */
    public function distributorcreate(Request $request)
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

     //      if ($validator->fails()) // on validator found any error 
     //  {
     //    // pass validator object in withErrors method & also withInput it should be null by default
     //     return redirect('Your Route Hare')->withErrors($validator)->withInput();
     //  }

          $timestamp = Carbon::now()->timestamp;
          $data = User::where('member_type','!=', 'Admin')->orderBy('id', 'desc')->first();
          if(!$data){
              $user_id = 'IOLS-001-' . $timestamp;
          }else{
               $user_id = 'IOLS-00' . $data->id+1 . '-'. $timestamp;
          }

          $user = new User();
          $user->user_id = $user_id;
          $user->sponsor_id = $user_id;
          $user->leader_id = $user_id;
          $user->level = '0';
          $user->member_type = 'Distributors';
          $user->name = $request->name;
          $user->email = $request->email;
          $user->phone_no = $request->phone_no;
          $user->password =  Hash::make($request->password);
          $user->register_date = Carbon::now();
          $user->user_status = 0;
          $user->activation_date = Carbon::now();
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

          return redirect()->route("distributor.view")->with('success', 'Proses Penambahan Pengedar Berjaya');
    }

     /**
    * Write code on Method
    *
    * @return response()
    */
     public function profile()
     {
          return view('dashboard.profile.index', [
               'user' => User::find(Auth()->user()->id),
          ]);
          
     }

     /**
     * Write code on Method
     *
     * @return response()
     */
     public function shop()
     {
          return view('dashboard.shop.index', [
               'user' => User::find(Auth()->user()->id),
               'products' => Product::all(),
               'price' =>  Product::with('price_level')->first(),
          ]);
          
     }

     // Add-to-cart
          /**
           * Write code on Method
          *
          * @return response()
          */
          public function addToCart($id)
          {

               $user = User::where('user_id',Auth()->user()->user_id)->first();
               $product = Product::findOrFail($id);
               $price = Product::findOrFail($id)->price()->where('price_level' , $user->member_type)->first();

               $systemcart = session()->get('systemcart', []);
          
               if(isset($systemcart[$id])) {
                    $systemcart[$id]['quantity']++;
               } else {
                    $systemcart[$id] = [
                         "name" => $product->name,
                         "quantity" => 1,
                         "price" => $price->price,
                         "image" => $product->image
                    ];
               }
                    
               session()->put('systemcart', $systemcart);
               return redirect()->back()->with('success', 'Produk berjaya ditambahkan ke troli!');
          
          }
          
          /**
           * Write code on Method
          *
          * @return response()
          */
          public function update(Request $request)
          {
               if($request->id && $request->quantity){
                    $systemcart = session()->get('systemcart');
                    $systemcart[$request->id]["quantity"] = $request->quantity;
                    session()->put('systemcart', $systemcart);
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
                    $systemcart = session()->get('systemcart');
                    if(isset($systemcart[$request->id])) {
                         unset($systemcart[$request->id]);
                         session()->put('systemcart', $systemcart);
                    }
                    session()->flash('success', 'Produk berjaya dikeluarkan dari troli');
               }
          }
          //add-to-cart
}
